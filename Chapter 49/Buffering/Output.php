<?php

namespace Buffering;

/**
 * Class Output
 * @package Buffering
 * Автоматизація визову ob_end_clean()
 *
 * Спрощує перехват вихідного потоку в скриптах.
 * Гарантовано визиває ob_end_clean() при виході об'єкту класа за поточну область видимості
 */
class Output
{
    /**
     * Вміст буферів разних рівней
     * @var array
     */
    private static $buffers = [];

    /**
     * Рівень вкладеності поточного об'єкту
     * @var int
     */
    private $level;

    /**
     * Буфер вже був знищений (наприклад, виведений в боаузер)
     * @var boolean
     */
    private $flushed;

    /**
     * Запускає новий буфер перехвату вихідного потоку
     * @param resourse $handler
     */
    public function __construct($handler = null)
    {
        // Спочатку запам'ятаємо попередній вміст буферу
        $prevLevel = ob_get_level();
        self::$buffers[$prevLevel] = ob_get_contents();

        // Встановлюємо новий буфер для перехвату
        if ($handler !== null) {
            ob_start($handler);
        } else {
            ob_start();
        }

        // Запам'ятовуємо поточний рівень об'єкту
        $this->level = ob_get_level();
    }

    /**
     * Завершує перехват вихідного потоку
     */
    public function __destruct()
    {
        if ($this->flushed) {
            return;
        }
        ob_end_clean();
        unset(self::$buffers[$this->level]);
    }

    /**
     * Повертає дані у буфер
     * @return string
     */
    public function __toString()
    {
        if ($this->flushed) {
            false;
        }

        // Якщо поточний об'єкт не є активним, то повертається текст із внутрішнього сховища,
        // або ж інакше результат роботи ob_get_contents()
        if (ob_get_level() == $this->level) {
            return ob_get_contents();
        } else {
            return self::$buffers[$this->level];
        }
    }
}