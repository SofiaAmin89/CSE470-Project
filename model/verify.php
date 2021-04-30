<?php 
   session_start();
   require_once '../model/db_connect.php';
   if(empty($_POST['user']))
  {
   header('location:../controller/admin_login.php');
  }
  else if(empty($_POST['pass']))
  {
   header('location:../controller/admin_login.php');
  }
  else
  {
   $username =$_POST['user'];
   $password =$_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($conn, $username);
   $password = mysqli_real_escape_string($conn, $password);
   $result =mysqli_query($conn, "select * from admin where Username ='$username' and password ='$password'");
   $num = mysqli_num_rows($result);
   if($num==1){
      
      header('location:../controller/admin_index.php');
      
      } else  {
         $_SESSION["error"] = $error;
         
         header('location:../controller/admin_login.php');
      }
   }

   ?>

