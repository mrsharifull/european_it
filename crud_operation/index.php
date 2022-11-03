<?php

require ('sql_con.php');

if(isset($_POST['submit'])){
    $username= $_POST['username'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    

    $sql =  "INSERT INTO user_info (username, email, password) VALUES ('$username', '$email', '$password')";
    
    $result = mysqli_query($conn, $sql);
    
    if(!$result){
        echo 'Username not available';
    }
    else{
        header("location:admin.php");
         
    }
}
else{
        $username= '';
        $email= '';
        $password ='';
}
         
        
        
?>
<form method="post" action="">
    <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter your user name"
        required><br><br>
    <input type="email" name="email" value="<?php echo $email; ?>" placeholder="Enter your email" required><br><br>
    <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Enter your password"
        required><br><br>
    <input type="submit" name="submit" value="Submit">

</form>