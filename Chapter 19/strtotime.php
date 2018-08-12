<?php ##Використання функції strtotime()
$check = [
  'now',
  '10 September 2018',
  '+1 day',
  '+1 week',
  '+1 week 2 days 4 hours 2 seconds',
  'next Thursday',
  'last Monday'
];
?>
<!DOCTYPE html>
<html lang='uk_UA'>
    <head>
        <title>Використання функції strtotime()</title>
        <meta charset='utf-8'>
    </head>
    <body>
        <table width='100%'>
            <tr align='left'>
                <th>Вхідний рядок</th>
                <th>Timestamp</th>
                <th>Отримана дата</th>
                <th>Сьогодні</th>
            </tr>
            <?php foreach ($check as $str) {?>
                <tr>
                    <td><?=$str?></td>
                    <td><?=$stamp = strtotime($str)?></td>
                    <td><?=date('Y-m-d H:i:s', $stamp)?></td>
                    <td><?=date('Y-m-d H:i:s', time())?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
</html>