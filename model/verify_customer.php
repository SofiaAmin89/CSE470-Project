<?php 
if(empty($_POST['user']))
  {
   header('location:../controller/customer_login.php');
  }
  else if(empty($_POST['pass']))
  {
   header('location:../controller/customer_login.php');
  }
  else
  {
   session_start();
   require_once '../model/db_connect.php';
   $username =$_POST['user'];
   $password =$_POST['pass'];
   
   $username = stripcslashes($username);
   $password = stripcslashes($password);
   $username = mysqli_real_escape_string($conn, $username);
   $password = mysqli_real_escape_string($conn, $password);
   $result =mysqli_query($conn, "select * from customer where Username ='$username' and password ='$password'");
   $num = mysqli_num_rows($result);
   if($num==1){
      session_start();
      $_SESSION['user']=$username;
      header('location:../controller/customer_index.php');
      exit();
      
      } else  {
         $_SESSION["error"] = $error;
         
         header('location:../controller/customer_login.php');
      }
   }

   ?>
