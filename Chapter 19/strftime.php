<?php ##Використовування strftime()
//Активуємо поточну локаль (бо дата буде англійською)
setlocale(LC_ALL, 'uk_UA.utf8');
//Виводимо два речення
echo strftime('%B %Y року, %d число. Був %A, годинник показував %H:%M.');
echo system('locale -a');