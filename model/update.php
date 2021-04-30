<?php 
session_start();
require_once '../model/db_connect.php';
if(isset($_POST['submit'])){
	$STAT =$_POST['status']
  $sql ='UPDATE orders SET status ='$STAT' WHERE order_id='$_SESSION['id']'';
  
  if((mysqli_query($conn, $sql))){
  header('location: ../controller/index.php');
  exit();
  }else{
    echo "Something went Wrong!";
    exit();
  }
}