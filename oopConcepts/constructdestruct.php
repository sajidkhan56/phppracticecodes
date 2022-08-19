<?php
    class Test
    {   
        //predefine constructor
        // function __construct()
        // {
        //         echo "i am calling";         
        // }

        //user define constructor
        // function Test()
        // {
        //     echo "i am calling";
        // }

        //parameterasied constructor

        function __construct($params)
        {
            echo $params;
        }

        //destructor
         function __destruct()
         {
             echo "destructor is calling";
         }
    }

    $obj = new Test('sajid khan');
    
?>