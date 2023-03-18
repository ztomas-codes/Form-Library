<?php
class Element
{
    protected $tag;
    protected $attributes = array();
    protected $inside;
    protected $style = array();

    public function __toString()
    {
        $result = '';
        if ($this instanceof Input && $this->label != null)
        {
            $result = '<label for='.$this->name.'>';
            $result .= $this->label.' ';
            $result .= '</label>';
        }
        if (empty($this->inside)) 
            $result .= '<'.$this->tag.' '.EAttribute::GetAttributes($this->attributes)." ".EStyle::GetStyles($this->style).' />';
        if (!empty($this->inside)) 
        {
            $result = '<'.$this->tag.' '.EAttribute::GetAttributes($this->attributes)." ".EStyle::GetStyles($this->style).'/>';
            if (is_array($this->inside))
                foreach ($this->inside as $element)
                    $result .= $element;
            else $result .= $this->inside;
            $result .= '</'.$this->tag.'>';
        }
        return $result;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle($style)
    {
        $this->style = $style;
    }

    public function addStyle($style)
    {
        array_push($this->style, $style);
    }


    public function getAttributes()
    {
        return $this->attributes;
    }

    public function addAttribute($attribute)
    {
        array_push($this->attributes, $attribute);
    }

    public function removeAttribute($name)
    {
        foreach($this->attributes as $key => $value)
            if ($value->getName() == $name)
                unset($this->attributes[$key]);
    }

    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function getInside()
    {
        return $this->inside;
    }

    public function setInside($inside)
    {
        $this->inside = $inside;
    }

    public function add($inside)
    {
        array_push($this->inside, $inside);
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = $tag;
    }


}