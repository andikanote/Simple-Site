<?php 
$title = "If Statement";
include 'includes/header.php' ?>
    <h3 style="color: red"></h3>
    <?php 
    echo '<h2> If Statement</h2>';
    $grade = 80;
    if($grade >= 50){
        echo '<h3 style="color: green">You Have Passed</h3>';
    }
    else{
        echo '<h3 style="color: red">You Have Failed</h3>';
    }
    $grade = 'C';
    if($grade == 'A'){
        echo '<h3 style="color: green">You Have Passed</h3>';
    }
    elseif($grade == 'B'){
        echo '<h3 style="color: blue">You DID Well!</h3>';
    }
    else{
        echo '<h3 style="color: red">You Have Failed...</h3>';
    }
    ?>
    <?php require 'includes/footer.php' ?>