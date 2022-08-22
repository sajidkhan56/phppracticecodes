<?php
    class User
    {
        static protected $name = 'sajid khan';
        static protected $job = 'web developer';
        static protected $office = 'islambad';

         
        static public function showData()
        {
            echo self::$name, self::$job, self::$office;
        }
    }
    
    User::showData();
?>