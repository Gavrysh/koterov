<?php ## Відображення функції
function throughTheDoor($with)
{
    echo "(get through the $with door)";
}
$func = new ReflectionFunction('throughTheDoor');
$func->invoke("left");
