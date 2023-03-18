<?php
class Div extends Element
{
    protected $tag = 'div';
    public function __construct($elements = array())
    {
        $this->inside = $elements;
    }
}
