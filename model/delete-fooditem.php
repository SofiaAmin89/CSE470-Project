<?php 
session_start();
require_once '../model/db_connect.php';


?>
    <?php include ('../view/templates/header.html');?>
<?php 
    //1.gets name of food item to be deleted 
    $name= $_GET['Name'];

    //2. creates sql query to delete item or option
    $sql= "DELETE FROM menu WHERE Name ='$name'";

    //executes query
    $res=mysqli_query($conn, $sql);
    if($res== TRUE)
    {
        
         $_SESSION['add']="Food Item Deleted Successfully!";
        
        echo "<script>alert('Food Item Deleted Successfully!');
        window.location.href = 'manage-fooditems.php';
        </script>";
    }
    else{
        $_SESSION['add']="Failed To Delete Food Item. Try again.";
        // header("location:".SITEURL.'admin/add-fooditems.php'); 
        echo "<script>alert('Food Item Could Not Be Added. Try Agian.');
        window.location.href = 'add-fooditem.php';
        </script>";
    }
   
    ?>