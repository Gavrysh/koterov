<?php ## Стандартна поведінка foreach()

class Monolog
{
    public    $first  = 'It\'s him.';
    protected $second = 'The Anomaly';
    private   $third  = 'Do we proceed?';
    protected $fourth = 'Yes.';
    private   $fifth  = 'He is steel...';
    public    $sixth  = '... only human';
}

$monolog = new Monolog();
foreach ($monolog as $key => $value) {
    echo $key.' => '.$value.'<br>';
}