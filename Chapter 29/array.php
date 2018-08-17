<?php ## Використання віртуальних масивів

/**
 * Клас ставить собою масив, ключі котрого нечутливі до регістру символів.
 * Наприклад "key", "Key", "KEY" з точки зору даного класу виглядають ідентично
 * (на відміну від стандартних масивів PHP, в яких вони різняться
 */
class InsensitiveArray implements ArrayAccess
{
    // Тут будемо зберігати масив елементів у нижньому регістрі
    private $a = [];

    // Повертає true, якщо елемент $offset існує
    public function offsetExists($offset)
    {
        $offset = mb_strtolower($offset); // переводимо у нижній регістр
        $this->log("offsetExists('$offset')");
        return isset($this->a[$offset]);
    }

    // Повертає елемент по його ключу
    public function offsetGet($offset)
    {
        $offset = mb_strtolower($offset);
        $this->log("offsetGet('$offset')");
        return $this->a[$offset];
    }

    // Встановлює нове значення елементу по ключу
    public function offsetSet($offset, $value)
    {
        $offset = mb_strtolower($offset);
        $this->log("offsetSet('$offset', '$value')");
        $this->a[$offset] = $value;
    }

    // Видаляємо елемент зі вказаним ключем
    public function offsetUnset($offset)
    {
        $offset = mb_strtolower($offset);
        $this->log("offsetUnset('$offset')");
        unset($this->array[$offset]);
    }

    // Службова інформація для демонстрації можливостей
    public function log($str)
    {
        echo "$str<br>";
    }
}

// Перевірка
$a = new InsensitiveArray();
$a->log("## Встановлюємо значення (оператор =).");
$a['php'] = 'There is more than one way to do it.';
$a['php'] = 'Це значення повинно переписати попереднє.';
$a->log("## Отримуємо значення елементу (оператор []).");
$a->log("<b>значення:</b> '{$a['php']}'");
$a->log("## Перевіряємо існування елементу (оператор isset()).");
$a->log("<b>exists:</b> ".(isset($a['php']) ? "true" : "false"));
$a->log("## Знищуємо елемент (оператор unset()).");
unset($a['php']);
?>