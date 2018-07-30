<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 14:28
 */

class Page
{
    protected $title;
    protected $content;
    protected $footer;

    public function __construct($title = '', $content = '', $footer= '')
    {
        $this->title = $title;
        $this->content = $content;
        $this->footer = $footer;
    }

    public function title()
    {
        return $this->title;
    }

    public function content()
    {
        return $this->content;
    }

    public function footer()
    {
        return $this->footer;
    }

    public function render()
    {
        echo '<h1>'.htmlspecialchars($this->title()).'</h1>';
        echo '<p>'.nl2br(htmlspecialchars($this->content())).'</p>';
        echo '<h1>'.htmlspecialchars($this->footer()).'</h1>';
    }
}