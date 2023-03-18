<?php
class ALink extends Element
{
    private $href;
    
    public function __construct($href, $text)
    {
        $this->tag = 'a';
        $this->attributes = array(new EAttribute('href', $href));
        $this->inside = $text;
    }

    public function getHref()
    {
        return $this->href;
    }

    public function setHref($href)
    {
        $this->href = $href;
    }


}