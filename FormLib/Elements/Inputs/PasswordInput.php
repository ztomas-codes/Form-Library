<?php
class PasswordInput extends Input implements Placeholder
{
    protected $type = 'password';
    public function setPlaceholder($placeholder)
    {
        array_push($this->attributes, new EAttribute('placeholder', $placeholder));
    }
}