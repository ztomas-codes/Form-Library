<?php
class EStyle extends EAttribute
{

    private $name;
    private $value;


    public function __construct($name, $value)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function __toString()
    {
        return "{$this->name}:{$this->value};";
    }

    public static function GetStyles($styles)
    {
        if (empty($styles))
            return '';
        if (!is_array($styles))
            return $styles;

        $result = 'style="';
        foreach ($styles as $style) {
            $result .= $style;
        }
        $result .= '"';
        return $result;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setValue($value)
    {
        $this->value = $value;
    }
}