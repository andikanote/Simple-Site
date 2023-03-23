
    <?php 
        $title = "Dashboard";
        include 'includes/header.php' ?>
    <h1>Welcome to siteKu App</h1>
    </br>
    <?php 
        echo 'Hello siteKu App!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    ?>

    <?php 
        $name = 'Admin siteKu App';
        $age = 23;
        echo $name;
        echo '<h1> My Name Is : '.$name.' </h1>';
        echo '<h1> My Name Is : '.$age.' </h1>';
        echo "<h1>My Name Is : $name </h1>";
    ?>
    <button type="button" class="btn btn-success">Success</button>
    <?php require 'includes/footer.php' ?>