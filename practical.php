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
