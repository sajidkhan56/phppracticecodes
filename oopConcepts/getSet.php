<?php 
    class User 
    {
        private $first_name;
    

        public function setFirstName($first_name)
        {
            $this->first_name = $first_name;
        }

        public function getFirstName()
        {
            return $this->first_name;
        }
    }

    $user = new User;
    $user->setFirstName('sajid');
    echo $user->getFirstName();
?>