<?php

    namespace Store\Model;

    class Product 
    {
            protected $product_name = "test product";

            public function showProduct()
            {
                echo $this->product_name;
            }
    } 
?>