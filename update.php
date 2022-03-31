<?php
$servername="localhost";
$username="root";
$password="";
$dbname="student_info";
//Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);

//Check connection
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
else{
    echo "Connection established";
}

$sql="UPDATE student SET name='Sita' WHERE id=2";

if(mysqli_query($conn,$sql)){
    echo "Record successfully updated.";
    header("Location: display.php");
}
else{
    echo "Error updating record:";
}

?>