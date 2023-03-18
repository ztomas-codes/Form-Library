<?php
class SelectOption extends Element
{
    private $value;
    private $text;

    public final function __construct($value, $text)
    {
        $this->tag = 'option';
        $this->value = $value;
        $this->text = $text;
        $this->attributes = array(new EAttribute('value', $this->value));
        $this->inside = $this->text;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }

    public function getText()
    {
        return $this->text;
    }

    public function setText($text)
    {
        $this->text = $text;
    }
}