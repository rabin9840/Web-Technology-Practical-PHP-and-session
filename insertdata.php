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
    echo "Connection established"."<br>";
}


//Inserting data in table in database
$sql="INSERT INTO student(id,name,email)
VALUES (1,'Ram','ram@example.com');
";

$sql .="INSERT INTO student(id,name,email)
VALUES (2,'Shyam','shyam@example.com');
";

$sql .="INSERT INTO student(id,name,email)
VALUES (3,'Hari','hari@example.com');
";

if(mysqli_multi_query($conn,$sql)){
    echo "Records inserted successfully";
}
else{
    echo "Error: ".mysqli_error($conn);
}



?>
