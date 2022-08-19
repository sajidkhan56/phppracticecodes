<?php
    class parentClass
    {   
        protected $name;
        public function user($user)
        {
            $this->name = $user." default name";
        }
    }
    class childClass extends parentClass
    {
        public function user($user)
        {
             $this->name = $user." update name (polymophism)"; 
        }

       public function getName()
       {
            return $this->name;
       }
    }

    $obj = new childClass;
    $obj->user('sajid khan');
    echo $obj->getName();
?>