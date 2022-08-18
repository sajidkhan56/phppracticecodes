<?php
    class User
    {   
        public $first_name;

        public function hello()
        {
            echo $this->first_name;
            return $this;
        }

        public function register()
        {
            echo "registered";
            return $this;
        }

        public function mail()
        {
            echo "email sent";
            return $this;
        }
    }

    $user = new User;
    $user->first_name = "sajid";
    $user->hello()->register()->mail();
?>