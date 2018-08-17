<?php ## Приклад визначення ітератору

/**
 * Каталог при ітерації повертає свій вміст
 */
class FSDirectory implements IteratorAggregate
{
    public $path;

    // Конструктор
    public function __construct($path)
    {
        $this->path = $path;
    }

    // Повертає ітератор - 'представник' даного об'єкту
    public function getIterator()
    {
        return new FSDirectoryIterator($this);
    }
}

/**
 * Клас-ітератор. Є представником для об'єктів FSDirectory
 * при переборі вмісту каталогу
 */
class FSDirectoryIterator implements Iterator
{
    // Посилання на "об'єкт-начальник"
    private $owner;

    // Дескриптор відкритого каталогу
    private $d = null;

    // Поточний зчитаний елемент каталогу
    private $cur = false;

    // Конструктор. Ініціалізує новий ітератор
    public function __construct($owner)
    {
        $this->owner = $owner;
        $this->d = opendir($owner->path);
        $this->rewind();
    }

    /**
     * Далі йдуть перевизначення віртуальних методів інтерфейсу Iterator
     */
    // Встановлення ітератору на перший елемент
    public function rewind()
    {
        rewinddir($this->d);
        $this->cur = readdir($this->d);
    }

    // Перевіряє, чи не скінчились ще елементи
    public function valid()
    {
        //readdir() повертає false коли елементи каталогу скінчились
        return $this->cur !== false;
    }

    // Повертає поточний ключ
    public function key()
    {
        return $this->cur;
    }

    // Повертає поточне значення
    public function current()
    {
        $path = $this->owner->path.'/'.$this->cur;
        return is_dir($path) ? new FSDirectory($path) : new FSFile($path);
    }

    // Передвигає ітератор до наступного елементу у списку
    public function next()
    {
        $this->cur = readdir($this->d);
    }
}

/**
 * Файл
 */
class FSFile
{
    public $path;

    // Конструктор
    public function __construct($path)
    {
        $this->path = $path;
    }

    // Повертає інформацію про зображення
    public function getSize()
    {
        return filesize($this->path);
    }

    // Тут можуть бути інші методи
}