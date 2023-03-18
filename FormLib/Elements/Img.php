<?php
class Img extends Element
{
    private $src;
    private $alt;

    public function __construct($src, $alt)
    {
        $this->tag = 'img';
        $this->src = $src;
        $this->alt = $alt;
        $this->attributes = array(new EAttribute('src', $this->src), new EAttribute('alt', $this->alt));
    }

    public function getSrc()
    {
        return $this->src;
    }

    public function getAlt()
    {
        return $this->alt;
    }

    public function setSrc($src)
    {
        $this->src = $src;
        $this->attributes = array(new EAttribute('src', $this->src), new EAttribute('alt', $this->alt));
    }

    public function setAlt($alt)
    {
        $this->alt = $alt;
        $this->attributes = array(new EAttribute('src', $this->src), new EAttribute('alt', $this->alt));
    }
}