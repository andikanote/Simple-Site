<?php 
$title = "Array";
include 'includes/header.php' ?>
    <h1>siteKu - Array</h1>
    <?php 
        $num = 3;
        $numbers = array(1,2,3,4,5,6,7,8,34,34,45,63,223,4,101,51,52,53,54,55,56);
        echo $numbers[5];

        echo "<p>$numbers[9]</p>";
        $size = count($numbers);
        echo "<p>Arrat Number is Size : $size</p>";

        for($count = 0; $count < $size; $count++){
            echo "<p>$numbers[$count]</p>";
        }
    ?>
    <?php require 'includes/footer.php' ?>