<?php ## Використання методу bindTo()

class View {
    protected $pages = [];
    protected $title = 'Контакти';
    protected $body = 'Вміст сторінки \'Контакти\'';

    public function addPage($page, $pageCallback)
    {
        $this->pages[$page] = $pageCallback->bindTo($this, __CLASS__);
    }

    public function render($page)
    {
        $this->pages[$page]();
        $content = <<<HTML
            <!DOCTYPE html>
            <html lang="uk-UA"
                <head>
                    <title>{$this->title}</title>
                    <meta charset="utf-8">
                </head>
                <body>
                    <p>{$this->body}</p>                
                </body>
            </html>
HTML;
        echo $content;
    }

    public function title()
    {
        return htmlspecialchars($this->title);
    }

    public function body()
    {
        return nl2br(htmlspecialchars($this->body));
    }
}

$view = new View();
$view->addPage('about', function()
{
    $this->title = 'Про нас';
    $this->body = 'Вміст сторінки \'Про нас\'';
});
$view->render('about');