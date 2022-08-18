<?php
    class User
    {
        private $first_name;
        private $last_name;

        function __construct($first_name, $last_name) 
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
        }

        public function getFullName()
        {
            echo $this->first_name." ".$this->last_name;
        }

    }

    $user = new User('sajid','khan');
    $user->getFullName();
?>