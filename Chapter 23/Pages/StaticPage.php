<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 14:58
 */

require_once 'Cached.php';

class StaticPage extends Cached
{
    public function __construct($id)
    {
        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content(), $this->footer());
        } else {
            parent::__construct('This is Title', 'This is content', 'This is Footer');
        }
    }

    public function id($name)
    {
        return 'static_page_'.$name;
    }
}