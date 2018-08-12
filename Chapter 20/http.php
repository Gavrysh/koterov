<?php ## 'Активація' HTML-посилань (не працює)
error_reporting(E_ALL);
ini_set('display_errors', 1);

$text = 'Посилання: (http://thematrix.com), www.ru?"a"=b, http://lozhki.net.';
echo hrefActivate($text);

//Зміна посилань їх HTML-еквівалентами (посилання підкреслюються)
function hrefActivate($text)
{
    return preg_replace_callback(
        '#
        (?:
            (\w+://)            #Протокол із подвійними слешами
            |                   # - або -
            www\.               #просто починається з www
        )
        [\w-]+(\.[\w-]+)*       #ім\'я хоста
        (?: : \d+)?             #порт не обов\'язково
        [^<>"\'()\[\]\s]*       #URI, але без лапок та дужок
        (?:                     #останній символ повинен бути...
            (?<! [[:punct:]] )  #АНІ пунктаційним
            |                   #але
            (?<= [-/&+*]     )  #припустимо закінчення на -/&+*
        #xis',
        function ($p){
            //Перетворюємо спецсимволи у HTML-представлення
            $name = htmlspecialchars($p[0]);
            //Якщо протокол відсутній, додаємо його на початок строки
            $href = !empty($p[1]) ? $name : "http://$name";
            //Формуємо посилання
            return "<a href=\"$href\">$name</a>";
        },
        $text
    );
}