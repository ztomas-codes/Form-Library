<?php
class Select extends Input
{
    protected $tag = 'select';

    public function addOption($value, $text)
    {
        $this->inside .= new SelectOption($value, $text);
    }
}