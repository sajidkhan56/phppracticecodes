<?php
    class User
    {
        protected $user_name;

        public function setUserName($user_name)
        {
            $this->user_name = $user_name;
        }

    }

    class Admin extends User
    {
        public function yourRole()
        {
            return strtolower(__CLASS__);
        }

        public function hello()
        {
            return "hello admin:".$this->user_name;
        }
    }

    $admin = new Admin;
    $admin->setUserName("sajid khan");
    echo $admin->hello();
?>