<style>
tr th,
td {
    padding: 5px 10px;
}
</style>

<?php 
require('sql_con.php');

$sql="SELECT * FROM user_info";

$result = mysqli_query($conn, $sql);

$count = mysqli_num_rows($result);

?>

<a href="index.php"><button>Add Data</button></a>

<table border="1px" style="border-collapse:collapse; ">
    <thead>
        <tr>
            <th>ID</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Insert Time</th>
            <th>Action</th>
        </tr>
    </thead>

    <?php

if($count > 0){
    $i=1;
    while($value = mysqli_fetch_assoc($result)){
        $id = $i;
        $db_id = $value['id'];
        $username = $value['username'];
        $email = $value['email'];
        $password = $value['password'];
        $insert_time = $value['insert_time'];
        $i++;     
?>
    <tbody>
        <tr>
            <td><?php echo  $id; ?></td>
            <td><?php echo  $username; ?></td>
            <td><?php echo  $email; ?></td>
            <td><?php echo  $password; ?></td>
            <td><?php echo  $insert_time; ?></td>
            <td><a href="delete.php?id=<?php echo base64_encode($db_id);?>"><button>Delete</button></a> </td>
        </tr>
    </tbody>
    <?php

    }
    ?>
</table>

<?php
}
else{
    echo "You don't have any data in your database!";
}
?>