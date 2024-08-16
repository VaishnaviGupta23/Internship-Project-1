<?php
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    
    require_once("dbcon.php");
    
    $cmd="insert into register (name,password,email) values ('$name','$password','$email')";

    $res=mysqli_query($conn,$cmd);
    if($res){
        echo "You are successfully registered.";
    }
}

?>
