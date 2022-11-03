<?php
$conn = mysqli_connect('localhost','root','','crud_test');
if(!$conn){
    die('Could not connect: '.mysqli_connect_error($conn));
}

?>