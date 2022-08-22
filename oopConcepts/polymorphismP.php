<?php

    abstract class User
    {
        protected $scores = 0;
        protected $numberOfArticals = 0;

        abstract public function calcScore();

        public function setNumberOfArticals($int)
        {   
            $this->numberOfArticals = (int) $int;
            
        }

        public function getNumberOfArticals()
        {
            return $this->numberOfArticals;
        }
    }

    class Author extends User
    {
        public function calcScore()
        {
    
            return $this->scores = $this->numberOfArticals * 10 + 20;
        }
    } 

    class Editor extends User
    {
        public function calcScore()
        {
            return $this->scores = $this->numberOfArticals * 6 + 15;
        }
    }

    $author = new Author;
    $author->setNumberOfArticals(8);
    echo $author->calcScore(); 
    
    $editor = new Editor;
    $editor->setNumberOfArticals(15);
    echo $editor->calcScore();
?>