<?php 

require_once '../model/db_connect.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin dashboard- View Menu</title>

</head>

<?php include ('../view/templates/header.html');?>

	<h3> MENU </h3>
	
	<br>
	<table class="tbl-full">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			
		</tr>
		<?php 
		$sql= "SELECT * FROM menu";  
		$res=mysqli_query($conn, $sql);  

		
		if($res== TRUE)
		{
			
			
			
				
				while($rows= mysqli_fetch_assoc($res))  
				{
					
					echo '<tr>'; 
                    echo "<td>" .$rows['id']. "</td>";
                    echo "<td>" .$rows['Name']. "</td>";
					echo "<td>" .$rows['Price']. "</td>";
					echo "<td> <td> <a href='../model/delete-fooditem.php?Name=$rows[Name]' ><input type='submit' value='Delete Item' class= 'btn brand2 z-depth-0' style='background-color: #9f9fa3'></a> </td>";
					echo '</tr>';			
			?>			
			<?php
				}
			
		}
		?>
	</table>
	

<?php include ('../view/templates/footer.html');?>