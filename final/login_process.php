<?php 
session_start();
	if(isset($_POST["submit"]))
	{
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		
		require_once("dbcon.php");
		$cmd="select * from register where username='$username'";
		$res=mysqli_query($conn,$cmd);
        //echo"ALOK";
		if($res and mysqli_num_rows($res)>0)
            
		{
            
			$rec=mysqli_fetch_assoc($res);
            $old_pass = $rec["password"];
           
         if($password==$old_pass)
         {
                $_SESSION['isLoggedIn']=true;
                $_SESSION['username']=$username;
               
				header("Location:welcome.php");
                die(); 
             }
          else
		  {
			 echo "<div class='container'><div class='alert alert-danger'><strong>Incorrect User Name or password!!!</strong></div></div>";
               
		  }      
            }
            
		}
		else
		{
			echo "<div class='container'><div class='alert alert-danger'><strong>Incorrect User Name or password!!!</strong></div></div>";
		}
	
?>