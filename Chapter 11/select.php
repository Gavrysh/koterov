<!DOCTYPE html>
<html lang="uk-UA">
    <head>
        <title>Приклад функціії та її використання</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        /*
        Функція приймає асоціативний масив та створює декілька тегів <option value="$key">value, де $key - наступний ключ масиву, а value - наступне значення. Якщо заданий другий параметр, то у відповідного тегу option проставляється атрибут selected.
        */
        function selectItems($items, $selected = 0) {
            $text = '';
            foreach ($items as $k => $v) {
                $ch = ($k === $selected ? ' selected' : '');
                $text .= '<option'.$ch.' value="'.$k.'">'.$v.'</option><br>';
            }
            return $text;
        }
        //Можемо уявити що у нас є масив імен та прізвищ
        $names = [
          'Pupkin' => 'Petro',
          'Perebyjnis' => 'Mykola',
          'Sirko' => 'Ivan'
        ];
        //Якщо обраний елемент - вивести інформацію
        if (isset($_REQUEST['surname'])) {
            $name = $names[$_REQUEST['surname']];
            echo 'Ви обрали: '.$_REQUEST['surname'].', '.$name;
        }
        ?>
        <!-- Форма для вибору ім'я людини -->
        <form action="<?=$_SERVER['SCRIPT_NAME']?>" method="post">
            Оберіть ім'я:
            <select name="surname">
                <?=selectItems($names, $_REQUEST['surname'])?>
            </select><br>
            <input type="submit" value="Дізнатись прізвище">
        </form>
    </body>
</html>