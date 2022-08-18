<?php
  abstract class User
  {
    abstract public function yourRole();

    protected $user_name;

    public function setUserName($user_name)
    {
        $this->user_name = $user_name;
    }

    public function getUserName()
    {
        return $this->user_name;
    }
  } 

  class Admin extends User
  {
        public function yourRole()
        {
            return "Admin";
        }
  }

  class Viewer extends User
  {
    public function yourRole()
    {
        return "viewer";
    }
  }

  $admin = new Admin;
  $admin->setUserName("sajid khan");
  echo $admin->yourRole();
?>