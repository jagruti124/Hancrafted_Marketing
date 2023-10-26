<?php


if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {


?>

<?php

if(isset($_GET['edit_coupon'])){

$edit_id = $_GET['edit_coupon'];

$edit_coupon = "select * from coupons where coupon_id='$edit_id'";

$run_edit = mysqli_query($con,$edit_coupon);

$row_edit = mysqli_fetch_array($run_edit);

$c_id = $row_edit['coupon_id'];

$c_title = $row_edit['coupon_title'];

$c_price = $row_edit['coupon_price'];

$c_code = $row_edit['coupon_code'];

$c_limit = $row_edit['coupon_limit'];

$c_used = $row_edit['coupon_used'];

$p_id = $row_edit['warehouse_id'];

$get_warehouses = "select * from warehouses where warehouse_id='$p_id'";

$run_warehouses = mysqli_query($con,$get_warehouses);

$row_warehouses = mysqli_fetch_array($run_warehouses);

$warehouse_id = $row_warehouses['warehouse_id'];

$warehouse_title = $row_warehouses['warehouse_title'];


}


?>

<div class="row"><!-- 1 row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Coupon

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 1 row Ends -->

<div class="row"><!-- 2 row Starts --->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title"><!-- panel-title Starts -->

<i class="fa fa-money fa-fw"> </i> Edit Coupon

</h3><!-- panel-title Ends -->

</div><!-- panel-heading Ends -->

<div class="panel-body"><!--panel-body Starts -->

<form class="form-horizontal" method="post" action=""><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Title </label>

<div class="col-md-6">

<input type="text" name="coupon_title" class="form-control" value="<?php echo $c_title; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Price </label>

<div class="col-md-6">

<input type="text" name="coupon_price" class="form-control" value="<?php echo $c_price; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Code </label>

<div class="col-md-6">

<input type="text" name="coupon_code" class="form-control" value="<?php echo $c_code; ?> ">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Coupon Limit </label>

<div class="col-md-6">

<input type="number" name="coupon_limit" value="<?php echo $c_limit; ?>" class="form-control">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> Select Coupon For Product or Bundle </label>

<div class="col-md-6">

<select name="warehouse_id" class="form-control">

<option value="<?php echo $warehouse_id; ?>"> <?php echo $warehouse_title; ?> </option>


<?php

$get_p = "select * from warehouses where status='warehouse'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['warehouse_id'];

$p_title = $row_p['warehouse_title'];

echo "<option value='$p_id'> $p_title </option>";

}

?>

<option></option>

<option>Select Coupon for bundle</option>

<option></option>

<?php

$get_p = "select * from warehouses where status='bundle'";

$run_p = mysqli_query($con,$get_p);

while($row_p = mysqli_fetch_array($run_p)){

$p_id = $row_p['warehouse_id'];

$p_title = $row_p['warehouse_title'];

echo "<option value='$p_id'> $p_title </option>";

}

?>

</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label"> </label>

<div class="col-md-6">

<input type="submit" name="update" class=" btn btn-primary form-control" value=" Update Coupon ">

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!--panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --->

<?php

if(isset($_POST['update'])){

$coupon_title = $_POST['coupon_title'];

$coupon_price = $_POST['coupon_price'];

$coupon_code = $_POST['coupon_code'];

$coupon_limit = $_POST['coupon_limit'];

$warehouse_id = $_POST['warehouse_id'];

$update_coupon = "update coupons set warehouse_id='$warehouse_id',coupon_title='$coupon_title',coupon_price='$coupon_price',coupon_code='$coupon_code',coupon_limit='$coupon_limit',coupon_used='$c_used' where coupon_id='$c_id'";

$run_coupon = mysqli_query($con,$update_coupon);


if($run_coupon){

echo "<script>alert('One Coupon Has Been Updated')</script>";

echo "<script>window.open('index.php?view_coupons','_self')</script>";

}


}

?>

<?php } ?>