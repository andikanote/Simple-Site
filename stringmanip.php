<?php 
$title = "String Manipulations";
include 'includes/header.php' ?>
    <h1>String Manipulation</h1>
    <?php 
        $pharse1 = "Student who come late";
        $pharse2 = "in class, stand with rock";
        $name = "Admin siteKu App";
        echo $pharse1 . ", Named Tiffany, ". $pharse2;
        echo '<br/>';
        echo '<br/>';
        //String Transformation
        echo 'Uppercase first letter : ' . ucfirst($name).'<br/>';
        echo 'Uppercase first letter of each word : ' . ucwords($name).'<br/>';
        echo 'Uppercase : ' . strtoupper($name).'<br/>';
        echo 'Lowercase : ' . strtolower($name).'<br/>';
        echo '<hr/>';
        echo 'Repeat String : ' . str_repeat('s', 10).'<br/>';
        echo 'Repeat String - Nested Function : ' . strtoupper(str_repeat('s', 10)).'<br/>';
        echo 'Get a Substring : ' . substr($name, 3, 5).'<br/>';
        echo 'Get position of string : '. strpos($name, 'n').'<br/>';
        //Returns Null
        echo '<hr/>';
        echo 'Find Character of String : ' . strchr($name, 'A').'<br/>';
        echo 'Find Character of String : ' . strchr($name, 's').'<br/>';
        echo 'Find Character of String : ' . strchr($name, 't').'<br/>';
        echo 'Find Length of String : ' . strlen($name).'<br/>';
        //Trim
        echo '<hr/>';
        echo 'Without Trim : '. "A" . "site" . "p" . '<br/>';
        echo 'Trim Space on both sides : '. "A" . trim(" d m i n ") . "s" . '<br/>';
        echo 'Trim Space to the left : '. "A" . ltrim(" d m i n ") . "s" . '<br/>';
        echo 'Trim Space to the left : '. "A" . rtrim(" d m i n ") . "s" . '<br/>';
        
        echo 'Replace string with another : '. str_replace("stand", "sit", $pharse2) . '<br/>';
    ?>
    <?php require 'includes/footer.php' ?>