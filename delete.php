<?php
    $con = mysqli_connect('localhost', 'root', '', 'student_info');
    $id = $_GET['id'];
    $del = "DELETE FROM `student` WHERE id='$id'";
    $res = mysqli_query($con, $del);
    if($res)
        header("Location: display.php");
    else 
        echo "deletion failed";
?>