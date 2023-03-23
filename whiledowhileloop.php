<?php 
$title = "While Do While Loop";
include 'includes/header.php' ?>
    <h1>While Do While Loops</h1>
    <?php 
    $grade = 0;
    //Infinate Loop
    while($grade < 10){
        echo '<p>1 AM LESS THAN 10!</p>';
        $grade++;
    }
    ?>

    <h1> DO-While Loop<h1>
        <?php 
        $grade = 0;
        do{
            echo '<p>1 AM LESS THAN 10!</p>';
            $grade++;
        }while($grade < 10);
        echo 'EXIT LOOP!';
        ?>
    <?php require 'includes/footer.php' ?> 