<?php

 namespace Store\Model;

 class Customer
 {
    private $name;

    function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
 } 

?>