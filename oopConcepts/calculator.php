<?php
    class Calculator
    {
        public function add($num, $num2)
        {
            echo $num+$num2." ";
            return $this;
        }

        public function sub($num, $num2)
        {
            echo $num-$num2." ";
            return $this;
        }

        public function mul($num, $num2)
        {
            echo $num*$num2." ";
            return $this;
        }

        public function div($num, $num2)
        {
            echo $num/$num2." ";
            return $this;
        }
    }

    $obj = new Calculator;
    $obj->add(1,2)->sub(3,2)->mul(2,2)->div(4,2);
?>