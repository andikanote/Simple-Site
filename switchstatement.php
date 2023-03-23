<?php 
$title = "Switch Statement";
include 'includes/header.php' ?>
    <h1>Switch Statement</h1>
    <?php 
        $grade = 'A';
        switch($grade){
            case 'A':
                echo '<h3 style="color: green">You Very Superstar</h3>';
                break;
            case 'B':
                echo '<h3 style="color: blue">You DID Well!!</h3>';
                break;
            case 'C':
                echo '<h3 style="color: red">You Have Failed</h3>';
        }
    ?>
    <?php require 'includes/footer.php' ?>