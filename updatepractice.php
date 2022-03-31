<?php
    $con = mysqli_connect('localhost', 'root', '', 'student_info');
    $id = $_GET['id'];
    $sel = "SELECT * from student where id = '$id'";
    $res = mysqli_query($con, $sel);
    $row = mysqli_fetch_assoc($res);
    // echo $id;
?>

<!-- <form action="updating.php" method="GET"> -->
<form action="updatepractice.php" method="GET">
    <input type="hidden" name="uid" value = "<?php echo $row['id']; ?>"><br>
    name: <input type="text" name="uname" value = "<?php echo $row['name']; ?>"><br>
    email: <input type="email" name="uemail" value = "<?php echo $row['email']; ?>"><br>
    <input type="submit" name="update" value="update">
</form>

<?php
if(isset($_GET['update'])){
    $id = $_GET['uid'];
    $name = $_GET['uname'];
    $email = $_GET['uemail'];
    

    $con = mysqli_connect("localhost", "root", "", "student_info");
    $query = "UPDATE `student` SET `name`='$name',`email`='$email' WHERE `id` = '$id'";
    // echo $id;
    $res =  mysqli_query($con, $query);

    if($res)
    {
        header("Location: display.php");
    }
    else    
        echo "update failed";
}
else
    echo "unsuccessful";

?>