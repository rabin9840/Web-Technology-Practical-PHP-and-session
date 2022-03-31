<style>
    table, tr, td, th{
        border: 1px solid;
        border-collapse: collapse;
    }
</style>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th >Edit</th>
    </tr>
<?php
    $con = mysqli_connect('localhost', 'root', '', 'student_info');
    $query = "SELECT * FROM student order by id desc";
    $res = mysqli_query($con, $query);
    // if($res)
    //     echo "data is collected.";
    // else
    //     echo 'data is not collected';
    while($row = mysqli_fetch_assoc($res)){
        // echo $row['name'];
        // echo $row['address'];
        // echo $row['contact'];
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><a href="updatepractice.php?id=<?php echo $row['id']; ?>">edit</a></td>
        <td><a href="delete.php?id=<?php echo $row['id']; ?>">delete</a></td>
    </tr>
<?php
    }
?>
</table>