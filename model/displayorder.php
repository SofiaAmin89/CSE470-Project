<?php 
session_start();
require_once '../model/db_connect.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Order(s)</title>
</head>
<?php include ('../view/templates/header.html');?>
<h4> Customer Order </h4>

<form action="displayorder.php" method="post">
    <h5> Enter date in the format YYYY-MM-DD</h5>
    <input type="text" name="date" placeholder="YYYY-MM-DD">
    <input type="submit" name="button1" class ="btn brand2 z-depth-0" value='Search'>
   
</form>

<table class ="tbl-full">
  <tr>
     <th>Name </th>
     <th>Username </th>
     <th>Order ID </th>
     <th>Status </th>
     <th> Price </th>
     <th>Actions </th>
  </tr>
<?php 

  if(isset ($_POST['button1']))
  {
    $today = $_POST['date'];
    if(!empty($today))
    {
    //get all the orders from database
    $sql = "SELECT * FROM orders where date = '$today'";


    $res=mysqli_query($conn, $sql);  

    
    $count = mysqli_num_rows($res);
    if($count > 0)
    {
        //order available
        while($row = mysqli_fetch_assoc($res))
        {
            // get all the order details
            $name = $row['name'];
            $username = $row['username'];
            $order_id = $row['order_id'];
            $status = $row['status'];
            $amount = $row['amount']
            
            ?>

             <tr>
               <td><?php echo $name; ?></td>
               <td><?php echo $username; ?></td>
               <td><?php echo $order_id; ?></td>
               <td><?php echo $status; ?></td>
               <td><?php echo $amount; ?></td>
               
               <td>
               <a href =<?php echo "../controller/updatestatus.php?oid=".$order_id; ?> class = "btn brand z-depth-0">update</a>
               </td>
            </tr>  
           <?php
        }
    }
    else
    {
      // Order not available
      echo "<tr><td colpan ='12' class  ='error'> There are no orders on $today </td></tr>";
    }
    
    }
    unset($today);
   }
   ?>
  </table>
  
<?php include ('../view/templates/footer.html');?>
</html>