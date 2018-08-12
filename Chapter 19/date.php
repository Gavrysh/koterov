<?php ##Виведення дат
echo date("l dS of F Y h:i:s A\n");
echo date('Сьогодні d.m.y<br>');
echo date('Цей файл адаптовано d.m.Y<br>', filectime(__FILE__));