<?php ##Повернення посилання
$a = 100;
function &r() //& повертає посилання
{
    global $a; //оголошує $a глобальною
    return $a; //повертає посилання, а не значення!
}
$b =& r(); //не забудьте &
$b = 0; //присвоює змінній $a
echo $a; //виводить 0. Це означає, що відтепер $b - синонім $a
