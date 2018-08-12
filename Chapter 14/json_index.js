//Призначаємо обробники, тільки після повного завантаження документа
$(function()
{
    //Обробник натискання на кнопку submit
    $('input[type=submit]').on('click', function(e)
    {
        //Запобігаємо звичайну поведінку елемента
        e.preventDefault();
        //Формуємо JSON із полів форми
        var json = {
            name: $('input[name=name]').val(),
            family: $('input[name=family]').val()
        }
        //Відправляємо асінхронний POST-запит за адресою,
        //вказаною в атрибуті action форми
        $.ajax({
            url: $('form').prop('action'),
            method: 'POST',
            data: 'json=' + JSON.stringify(json)
        })
        //У випадку успішного отримання відповіді від сервера
        .done(function(msg)
        {
            //Замінюємо надпис 'Вітаю' у полі p#is-hello
            $('#js-hello').html(msg);
        });
    });
});