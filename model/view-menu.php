<?php 

require_once '../model/db_connect.php';
$sql = 'SELECT Name, Price, id FROM menu';
$res = mysqli_query($conn, $sql);  
$items =  mysqli_fetch_all($res, MYSQLI_ASSOC);
mysqli_free_result($res);
mysqli_close($conn);



?>
<!DOCTYPE html>
<html>
<head>
	<title>View Menu</title>
	<style>
		h3{
			color: #8b1a32 !important;
			text-align: center;
		}
	</style>
</head>

<?php include ('../view/templates/header2.html');?>
<h3> Menu </h3>
<div class = "cointainer">
	<div class = "row">
		<?php foreach($items as $item):?>
			<div class = "col s4 md3 center">
				<div class = "card z-depth-0">
					<div class = "card-content center">
						<h5 colour =" "><?php echo htmlspecialchars($item['Name']);?></h5>
						<div> <?php echo "Price: Tk."?><?php echo htmlspecialchars($item['Price']);?></div>
					</div>

					<div class = "card-action right-align">
						<a class = "brand-text" href = "placeorder.php?id = <?php echo $item['id']?>" ><b>Select</b></a>
					</div>

				</div>


			</div>
		<?php endforeach; ?>

	</div>
</div>
<br><br><br><br>
<?php include ('../view/templates/footer.html');?>
</html>


