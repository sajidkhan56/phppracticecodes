<?php
    trait ChildName
    {
        private $child_name = 'child name';

        public function showChild()
        {
            return $this->child_name;
        }
    }

    class ParentClass
    {
        use ChildName;
    }

    $parent = new ParentClass;
    echo $parent->showChild();
?>