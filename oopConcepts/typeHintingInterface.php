<?php 
    interface User 
    {
        public function setUserName($user_name);
        public function getUserName();

        public function setGender($gender);
        public function getGender();
    }

    class Commentator implements User
    {
        protected $user_name = '';
        protected $gender = 'none of your busniss';

        public function setUserName($user_name)
        {
            $this->user_name = $user_name;
        }

        public function getUserName()
        {
            return $this->user_name;
        }

        public function setGender($gender)
        {   
            $genderArray = array('male', 'female', 'others');

            if(in_array($gender, $genderArray)) {
               
                return $this->gender = $gender;
            }
        }

        public function getGender()
        {
            return $this->gender;
        }
    }

    function addMrOrMrsToUserName(User $user)
    {
        $user_name = $user->getUserName();
        $gender = $user->getGender();

        if($gender === 'female') {
            return "Mrs. " . $user_name;
        }
        else if($gender === 'male') {
            return "Mr. " . $user_name;
        }
                
        return $user_name;


    }

    $user = new Commentator;
    $user->setUserName('sajid khan');
    $user->setGender('male');
    echo addMrOrMrsToUserName($user);
?>