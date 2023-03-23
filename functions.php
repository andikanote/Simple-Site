<?php 
$title = "Functions";
include 'includes/header.php' ?>
    <h1>Functions</h1>
    <?php 
    /* Defining a function */
    function writeMessage(){
        echo "You really a nice persion, Have a nice time! <br/>";
    }
    /* Calling a Function */
    writeMessage();
    echo "<hr/>";
    writeMessage();

    /* Functions with parameters */
    function addFunctions($num1, $num2){
        $sum = $num1 + $num2;
        $num2 = $num2 + 1;
        echo "The sum of $num1 and $num2 is : $sum <br/>";
    }

    function changeNum($num){
        $num = $num + 10;
    }

    function returnProduct($num1, $num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    addFunctions(10, 20);
    addFunctions(10, $num);
    addFunctions('10', "50");
    
    changeNum($num);
    echo $num . '<br/>'; 

    $return_value = returnProduct(10, 200);
    echo $return_value . '<br/';

    ?>
    <?php require 'includes/footer.php' ?>