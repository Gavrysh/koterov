<?php ## Наслідування та модифікатори доступу
// Клас з єдиною ЗАКРИТОЮ властивістю
class Bases
{
    private $prop = 0;

    public function getBaseProp()
    {
        return $this->prop;
    }
}

// Клас з ВІДКРИТОЮ властивістю, яка має таке ж саме ім'я, як і в базовому
class Posterity extends Bases
{
    public $prop = 1;

    public function getPosterityProp()
    {
        return $this->prop;
    }
}

echo '<pre>';
$cls = new ReflectionClass('Posterity');
$obj = $cls->newInstance();
$obj->prop = 2;

// Роздруковуємо значення властивостей та переконуємось у тому, що вони не перетинаються
echo 'Bases: '.$obj->getBaseProp().'<br>';
echo 'Posterity: '.$obj->getPosterityProp().'<br>';

// Друкуємо властивості похідного класу
var_dump($cls->getProperties());

// Друкуємо методи похідного класу
var_dump($cls->getMethods());