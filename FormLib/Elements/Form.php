<?php
class Form extends Element
{
    private $action;
    private $method;

    public function __construct($action, $method, $elements = array())
    {
        $this->tag = 'form';
        $this->action = $action;
        $this->method = $method;
        $this->inside = $elements;
        $this->attributes = array(new EAttribute('method', ($this->method == FormMethod::POST) ? "post" : "get" ), new EAttribute('action', $this->action));
    }

    public function validate()
    {
        $data = ($this->method == FormMethod::GET) ?  $_GET : $_POST;
        foreach($data as $key => $value)
        {
            $data[$key] = test_input($value);
        }
        return $data;
    }

    public function getAction() {
        return $this->action;
    }

    public function setAction($action) {
        $this->action = $action;
    }

    public function getMethod() {
        return $this->method;
    }

    public function setMethod($method) {
        $this->method = $method;
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

enum FormMethod {
    case POST;
    case GET;
}
