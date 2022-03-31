<?php

//START SESSION
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        //SET SESSION VARIABLE
        $_SESSION['name']="session";
        $_SESSION['favcolor']="green";
        $_SESSION['favanimal']="cat";

        echo "session variables are set.";

        ?>
    </body>
</html>