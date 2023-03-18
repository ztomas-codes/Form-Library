<?php
class EAttribute
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
        return "{$this->name}=\"{$this->value}\"";
    }

    public static function GetAttributes($attributes)
    {
        if (empty($attributes))
            return '';
        if (!is_array($attributes))
            return $attributes;

        $result = '';
        foreach ($attributes as $attribute) {
            $result .= $attribute;
        }
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