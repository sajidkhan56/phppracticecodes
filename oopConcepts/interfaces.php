<?php
    class User
    {
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

    interface Author
    {
        public function setAuthorPrivileges($array);
        public function getAuthorPrivileges();
    }

    interface Editor
    {
        public function setEditorPrivileges($array);
        public function getEditorPrivileges();

    }

    class AuthorEditor extends User implements Author,Editor
    {
        private $authorPrivilegesArray = array();
        private $editorPrivilegesArray = array();
       
        public function setAuthorPrivileges($array)
        {
            $this -> authorPrivilegesArray = $array;
        }
       
        public function getAuthorPrivileges()
        {
            return $this -> authorPrivilegesArray;
        }
       
        public function setEditorPrivileges($array)
        {
            $this -> editorPrivilegesArray = $array;
        }
       
        public function getEditorPrivileges()
        {
            return $this -> editorPrivilegesArray;
        }
    }

    $obj = new AuthorEditor;
    $obj->setUserName('sajid khan');
    $obj->setAuthorPrivileges(array("write text","add punctuation"));
    $obj->setEditorPrivileges(array("edit text", "edit punctuation"));
    $userName  = $obj -> getUsername();
    $userPrivileges = array_merge($obj -> getAuthorPrivileges(),
     $obj -> getEditorPrivileges());
 
    echo $userName . " has the following privileges: ";
    echo implode(", ", $userPrivileges);
    echo ".";
?>