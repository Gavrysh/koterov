<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 15:09
 */

require_once 'Cached.php';

class News extends Cached
{
    public function __construct($id)
    {
        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content(), $this->footer());
        } else {
            parent::__construct('Title News', 'Content of page News', 'Footer News');
        }
    }
    public function id($name)
    {
        return 'news_'.$name;
    }
}