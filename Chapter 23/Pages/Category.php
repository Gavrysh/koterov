<?php
/**
 * Created by PhpStorm.
 * User: gases
 * Date: 28.07.18
 * Time: 15:15
 */

require_once 'Cached.php';

class Category extends Cached
{
    public function __construct($id)
    {
        if ($this->isCached($this->id($id))) {
            parent::__construct($this->title(), $this->content(), $this->footer());
        } else {
            parent::__construct('Title Category', 'Content of page Category', 'Footer Category');
        }
    }

    public function id($name) {
        return 'category_'.$name;
    }
}