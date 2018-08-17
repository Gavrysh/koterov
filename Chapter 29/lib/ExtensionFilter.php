<?php ## Створення фільтру ExtensionFilter

class ExtensionFilter extends FilterIterator
{
    // Розширення яке фільтрується
    private $ext;
    // Ітератор DirectoryIterator
    private $it;

    // Конструктор
    public function __construct(DirectoryIterator $it, $ext)
    {
        parent::__construct($it);
        $this->it = $it;
        $this->ext = $ext;
    }

    // Мєтод який визначає, задовольняє поточний елемент фільтру чи ні
    public function accept()
    {
        if (!$this->it->isDir()) {
            $ext = pathinfo($this->current(), PATHINFO_EXTENSION);
            return $ext != $this->ext;
        }
        return true;
    }
}