<?php 
session_start();
require_once '../model/db_connect.php';
$_SESSION['id']= $_GET['oid'];

 ?>
<!DOCTYPE html>
<html>
<head>
   <title> Order Status Update</title>
</head>

<?php include ('../view/templates/header.html');?>
<div class = "main-content">
  <div class = "wrapper">
    <h2> Update Status </h2>
    <br>
    
    <form action="../model/update.php" method ="post" >

      <label for="status">New Status:</label>
      <select name="status" style="display: inline-block;">
        <option value="">update status</option>
        <option value="completed">Completed</option>
        <option value="ordered">Ordered</option>
        <option value="picked-up">Picked-up</option>
      </select>
      <input type="submit" name="submit" class ="btn brand2 z-depth-0" value="Update">
      
    </form>
    <br>
  </div>
</div>
<?php include '../view/templates/footer.html';?>

</html>

