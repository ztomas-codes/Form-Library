<?php
class TextInput extends Input implements Placeholder
{
    protected $type = 'text';
    public function setPlaceholder($placeholder)
    {
        array_push($this->attributes, new EAttribute('placeholder', $placeholder));
    }
}