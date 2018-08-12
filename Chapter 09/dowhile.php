<!DOCTYPE html>
<html lang="uk-UA">
    <head>
        <title>Модель сценарію для обробки форми</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        $WasError = 0; //Індікатор помилки - якщо не 0, то була помилка
        //Якщо натиснули кнопку Submit (з назвою doSubmit)...
        if (isset($_REQUEST['doSubmit'])) {
            do {
                //Перевірка вхідних даних
                if ($_REQUEST['reloads'] != 1 + 1 + 7) {
                    $WasError = 1;
                    break;
                }
                if ($_REQUEST['loader'] != 'source') {
                    $WasError = 1;
                    break;
                }
                //... може йти ще декіька перевірок
                //...
                //у цьому місці все гаразд. Обробка даних
                echo 'Ви уважна людина, вітання!' . '<br>';
                //Можна записувати дані у файл
                exit();
            } while (0);
        }
        //сталася помилка?
        if ($WasError) {
            echo 'Ви відповіли невірно, спробуйте ще раз!';
        }
        ?>
        <!--
        Виводимо форму, через котру користувач буде запускати цей сценарій, і, можливо, відображення сповіщення про помилку, якщо $WasError != 0.
        -->
        <form action="<?=$_SERVER['REQUEST_URI']?>" method="post">
            Кількість перезавантажень: <input type="text" name="reloads"><br>
            Завантажувальна програма: <input type="text" name="loader"><br>
            <input type="submit" name="doSubmit" value="Відповісти на запитання">
        </form>
    </body>
</html>