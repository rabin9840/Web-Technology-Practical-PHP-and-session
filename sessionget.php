<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        //ECHO SESSION VARIABLES THAT WERE ON PREVIOUS EXAMPLE
        echo "Session Name is: ". $_SESSION['name']."<br>";
        echo "Session Name is: ". $_SESSION['favcolor']."<br>";
        echo "Session Name is: ". $_SESSION['favanimal']."<br>";
        ?>
    </body>
</html>