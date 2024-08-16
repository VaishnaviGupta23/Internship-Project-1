<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    require_once("dbcon.php");
    
    $cmd="insert into register (username,password,email) values ('$username','$password','$email')";

    $res=mysqli_query($conn,$cmd);
    if($res){
        echo "You are successfully registered.";
    }
}

?>
