<?php 

require_once '../model/db_connect.php';

if(isset($_POST['submit']))
{
  if(empty($_POST['name']))
  {
  }
  else if(empty($_POST['price']))
  {
  }
  else
  {
  	$name= $_POST['name'];
    $price= $_POST['price'];
    $sql= "INSERT INTO menu SET
       Name = '$name',
       Price= '$price'
       ";
    $res=mysqli_query($conn, $sql);
    if($res== TRUE)
    {
        
         $_SESSION['add']="Food Item Added Successfully!";
        
        echo "<script>alert('Food Item Inserted Successfully!');
        window.location.href = '../controller/admin_index.php';
        </script>";
    }
    else{
        $_SESSION['add']="Failed To Add Food Item. Try again.";
        
        echo "<script>alert('Food Item Could Not Be Added. Try Agian.');
        window.location.href = 'add-fooditem.php';
        </script>";
    }
  }
		


}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin dashboard - Add new item</title>


</head>

<?php include ('../view/templates/header.html');?>
<body>
	<section>
		<h4 class = "center"> Add New Item </h4>
		<form class = "white" action ="add-fooditem.php" method= "POST"> 
		<label> Name of the food item: </label>
		<input type ="text" name = "name">
		<label> Price </label>
		<input type ="text" name = "price">
		<div class ="center">
			<input type ="submit" name = "submit" value = "Submit" class ="btn brand z-depth-0">

		</div>
	</form>

	</section>

</body>
<?php include ('../view/templates/footer.html');?>
</html>