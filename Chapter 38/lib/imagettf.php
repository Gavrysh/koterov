<?php ## Бібліотека функцій для роботи з TTF

// Виправлена функція imageTtfBBox().
// Працює коректно навіть при ненулевому вуглі повороту $angle (вихідна функція при цьому працює невірно.
function imageTtfBBox_fixed($size, $angle, $fontfile, $text)
{
    // Обчислюємо розмір при НУЛЕВОМУ вуглі повороту
    $horiz = imagettfbbox($size, 0, $fontfile, $text);

    // Обчислюємо сінус та косінус вугла повороту
    $cos = cos(deg2rad($angle));
    $sin = sin(deg2rad($angle));

    $box = [];

    // Виконуємо поворот кожної координати
    for ($i = 0; $i < 7; $i += 2) {
        list($x, $y) = [$horiz[$i], $horiz[$i + 1]];
        $box[$i] = round($x*$cos + $y*$sin);
        $box[$i+1] = round($y*$cos - $x*$sin);
    }

    return $box;
}

// Обчислює роміри багатокутника з горизонтальними та вертикальними сторонами, у котрий вписаний вказаний текст.
// Результуючий масив має структуру:
// array(
// 0 => ширина прямокутника,
// 1 => висота прямокутника,
// 2 => зміщення початкової точки по Х відносно лівого верхнього кута прямокутника,
// 3 => зміщення початкової точки по Y
// );
function imageTtfSize($size, $angle, $fontfile, $text)
{
    // Обчислюємо охоплюючий багатокутник
    $box = imageTtfBBox_fixed($size, $angle, $fontfile, $text);
    $x = [$box[0], $box[2], $box[4], $box[6]];
    $y = [$box[1], $box[3], $box[5], $box[7]];

    // Обчислюємо ширину, висоту та зміщення початкової точки
    $width = max($x) - min($x);
    $height = max($y) - min($y);

    return [$width, $height, 0 - min($x), 0 - min($y)];
}

// Функція повертає найбільший розмір шрифру, враховуя те, що текст $text обов'язково повинен
// поміститися у прямокутник розмірами ($width, $height)
function imageTtfGetMaxSize($angle, $fontfile, $text, $width, $height)
{
    $min = 1;
    $max = $height;

    while (true) {
        // Робочий розмір - середнє між максимумом та мінимумом
        $size = round(($max + $min)/2);
        $sz = imageTtfSize($size, $angle, $fontfile, $text);
        if ($sz[0] > $width || $sz[1] > $height) {
            // Будемо зменшувати максимальну ширину доти, поки текст не "перехлестне" багатокутник
            $max = $size;

        } else {
            // Навпаки, будемо збільшувати мінімальну, поки текст вміщується
            $min = $size;
        }
        // Мінімум та максимум зійшлись одне до одного
        if (abs($min - $max) < 2) {
            break;
        }
    }
    return $min;
}