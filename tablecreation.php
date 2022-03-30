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


//Creating the table inside the database
$sql="CREATE TABLE student (
    id INT(2) PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL
)";

//Checking if table created or not
if(mysqli_query($conn,$sql)){
    echo "Table Student created successfully"."<br>";
}
else{
    echo "Error creating table: " .mysqli_error($conn);
}

?>
