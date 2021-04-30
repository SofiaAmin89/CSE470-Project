<?php 
require_once '../model/db_connect.php';

if(isset($_GET['id'])){
$id = mysqli_real_escape_string($conn, $_GET['id'] );
$sql= "SELECT * FROM menu where id = $id;";
$result = mysqli_query($conn, $sql);  
$food = mysqli_fetch_assoc($result);
mysqli_free_result($result);
mysqli_close($conn);
print_r($food);





}
	?>

<!DOCTYPE html>
<html>
<head>
	<title>Place Order</title>


</head>

<?php include ('../view/templates/header.html');?>
<body>
	
</body>
<?php include ('../view/templates/footer.html');?>
</html>