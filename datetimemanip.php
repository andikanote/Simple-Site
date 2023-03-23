<?php 
$title = "Date Time Manipulation";
include 'includes/header.php' ?>
    <h1>Date Time Manipulation</h1>
    <?php 
        $datenow = getdate();
        echo "Today's Date: <br/>";
        echo $datenow ['mday'] . '<br/>';
        echo $datenow ['mon'] . '<br/>';
        echo $datenow ['year'] . '<br/>';

        echo "Today Date : " . $datenow['mday'] . '-' . $datenow['mon'] . '-' . $datenow['year'] . '<br/>';
        echo time() . '<br/>';
    ?>
    <?php require 'includes/footer.php' ?>