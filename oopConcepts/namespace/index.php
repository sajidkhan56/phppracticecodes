<?php

    require 'src\Model\Customers.php';
    require 'src\Model\Product.php';
    
    use Store\Model\Customer;
    use Store\Model\Product;

    class MultipleInheritance
    {
       public function test()
       {
        $customer = new Customer('sajid khan');
        echo $customer->getName();
    
        $product = new Product;
        $product->showProduct();

       }   
    }

    $test = new MultipleInheritance;
    $test->test();
?>