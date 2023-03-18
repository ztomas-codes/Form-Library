<?php
class Input extends Element
{
    protected $name;
    protected $label;
    protected $type;

    public final function __construct($name, $label = null)
    {
        if (!($this instanceof Select)) $this->tag = "input";
        $this->name = $name;
        $this->label = $label;
        if (!($this instanceof Submit))
        $this->attributes = array(new EAttribute('name', $this->name), new EAttribute('type', $this->type));
        else $this->attributes = array(new EAttribute('type', $this->type));
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
    }

    public function getType()
    {
        return $this->type;
    }
}