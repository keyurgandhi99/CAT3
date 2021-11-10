<?php
   include("config.php");
   session_start();
   
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $myusername = mysqli_real_escape_string($conn,$_POST['uname']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['pass']); 
      

      $sql = "SELECT * FROM admin_reg WHERE admin_username = '$myusername' AND password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
      
         $_SESSION['login_user'] = $myusername;
          
         sleep(2);
         header("location: admin/index.php?id=$myusername");
      }else {

      	 header("location: adminlogin.php");
      	 sleep(2);
      	$_SESSION['error'] ="WRONG";
         
      }
   }
?>