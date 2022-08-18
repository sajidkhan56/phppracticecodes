<?php
    class User
    {
        public $first_name, $last_name;

        public function hello()
        {
            echo "Hello, ".$this->first_name." ". $this->last_name;
        }
        
    }

    $user = new User;
    $user->first_name = "sajid";
    $user->last_name = "khan";
    $user->hello();
    echo "</br>";
    $user1 = new User;
    $user1->first_name = "hamdan";
    $user1->last_name = "khan";
    $user1->hello();

?>