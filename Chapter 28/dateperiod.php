<?php ## Використання DatePeriod

$now = new DateTime();
$step = new DateInterval('P1W');
$period = new DatePeriod($now, $step, 7);

foreach ($period as $datetime) {
    echo $datetime->format('Y-m-d').'<br>';
}
