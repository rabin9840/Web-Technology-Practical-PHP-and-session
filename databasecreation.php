<?php 

$servername="localhost";
$username="root";
$password="";

//Create connection
$conn=mysqli_connect($servername,$username,$password);

//Check connection
if(!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}
else{
    echo "Connection established"."<br>";
}

//Create Database
$sql="Create Database student_info";

if(mysqli_query($conn,$sql)){
    echo "Database student_info Created: "."<br>";
}
else{
    echo "Error creating database: ".mysqli_error($conn);
}




 ?>