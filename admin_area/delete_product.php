<?php



if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['delete_warehouse'])){

$delete_id = $_GET['delete_warehouse'];

$delete_pro = "delete from warehouses where warehouse_id='$delete_id'";

$run_delete = mysqli_query($con,$delete_pro);

if($run_delete){

echo "<script>alert('One Product Has been deleted')</script>";

echo "<script>window.open('index.php?view_warehouses','_self')</script>";

}

}

?>

<?php } ?>