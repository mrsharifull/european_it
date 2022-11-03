<?php
require('sql_con.php');

$recv = base64_decode($_REQUEST['id']);

$sql = "DELETE FROM user_info WHERE id =  $recv";

$result = mysqli_query($conn, $sql);

if($result){
    header("location:admin.php?deleted");
}


?>