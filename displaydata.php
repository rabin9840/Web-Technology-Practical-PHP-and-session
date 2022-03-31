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
/*
$sql="SELECT * FROM student";
$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    //OUTPUT DATA OF EACH ROW
    while($row=mysqli_fetch_assoc($result)){
        echo "id: ".$row["id"]. "Name: ".$row["name"]."email: ".$row["email"]."<br>";
    }
}

else{
    echo "0 results";
}
*/
/*
$db="student";
$conn=mysqli_connect("localhost","root","")or die(mysql_error());

mysqli_select_db($conn,$db)or die("Cannot connect to database");*/

$query=mysqli_query($conn,"Select * from student");

?>

<html>
    <head>
        <title>
            Displaying the database table
        </title>
    </head>

    <body>
    <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php
            while($row=mysqli_fetch_array($query))
            {
                ?>
                <tr>
                    <th><?php echo $row['id'];?></th>
                    <th><?php echo $row['name'];?></th>
                    <th><?php echo $row['email'];?></th>
                    
                </tr>

            <?php } ?>

        
        </table>
    </body>
</html>