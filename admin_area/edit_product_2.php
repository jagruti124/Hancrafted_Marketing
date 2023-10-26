<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>

<?php

if(isset($_GET['edit_warehouse'])){

$edit_id = $_GET['edit_warehouse'];

$get_p = "select * from warehouses where warehouse_id='$edit_id'";

$run_edit = mysqli_query($con,$get_p);

$row_edit = mysqli_fetch_array($run_edit);

$p_id = $row_edit['warehouse_id'];

$p_title = $row_edit['warehouse_title'];

$p_cat = $row_edit['p_cat_id'];

$cat = $row_edit['cat_id'];

// $m_id = $row_edit['manufacturer_id'];

$p_image1 = $row_edit['warehouse_img1'];

$p_image2 = $row_edit['warehouse_img2'];

$p_image3 = $row_edit['warehouse_img3'];

$new_p_image1 = $row_edit['warehouse_img1'];

$new_p_image2 = $row_edit['warehouse_img2'];

$new_p_image3 = $row_edit['warehouse_img3'];

$p_price = $row_edit['warehouse_price'];

$p_desc = $row_edit['warehouse_desc'];

$p_keywords = $row_edit['warehouse_keywords'];

$psp_price = $row_edit['warehouse_psp_price'];

$p_label = $row_edit['warehouse_label'];

$p_url = $row_edit['warehouse_url'];

$p_features = $row_edit['warehouse_features'];

$p_video = $row_edit['warehouse_video'];

}

// $get_manufacturer = "select * from manufacturers where manufacturer_id='$m_id'";

// $run_manufacturer = mysqli_query($con,$get_manufacturer);

// $row_manfacturer = mysqli_fetch_array($run_manufacturer);

// $manufacturer_id = $row_manfacturer['manufacturer_id'];

// $manufacturer_title = $row_manfacturer['manufacturer_title'];


$get_p_cat = "select * from warehouse_categories where p_cat_id='$p_cat'";

$run_p_cat = mysqli_query($con,$get_p_cat);

$row_p_cat = mysqli_fetch_array($run_p_cat);

$p_cat_title = $row_p_cat['p_cat_title'];

$get_cat = "select * from categories where cat_id='$cat'";

$run_cat = mysqli_query($con,$get_cat);

$row_cat = mysqli_fetch_array($run_cat);

$cat_title = $row_cat['cat_title'];

?>


<!DOCTYPE html>

<html>

<head>

<title> Edit Warehouse </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#warehouse_desc,#warehouse_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Edit Warehouse

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Edit Warehouse

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Title </label>

<div class="col-md-6" >

<input type="text" name="warehouse_title" class="form-control" required value="<?php echo $p_title; ?>">

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Url </label>

<div class="col-md-6" >

<input type="text" name="warehouse_url" class="form-control" required value="<?php echo $p_url; ?>" >

<br>

<p style="font-size:15px; font-weight:bold;">

Warehouse Url Example : desi-storage-warehouse

</p>

</div>

</div>
<!-- form-group Ends -->
<!-- form-group Starts -->

<!-- <div class="form-group" > -->

<!-- <label class="col-md-3 control-label" > Select A Manufacturer </label> -->

<!-- <div class="col-md-6" > -->


<?php

// $get_manufacturer = "select * from manufacturers";

// $run_manufacturer = mysqli_query($con,$get_manufacturer);

// while($row_manfacturer = mysqli_fetch_array($run_manufacturer)){

// $manufacturer_id = $row_manfacturer['manufacturer_id'];

// $manufacturer_title = $row_manfacturer['manufacturer_title'];

// echo "
// <option value='$manufacturer_id'>
// $manufacturer_title
// </option>
// ";

// }

?>

<!-- </div> -->

<!-- </div> -->
<!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Category </label>

<div class="col-md-6" >

<select name="warehouse_cat" class="form-control" >

<option value="<?php echo $p_cat; ?>" > <?php echo $p_cat_title; ?> </option>


<?php

$get_p_cats = "select * from warehouse_categories";

$run_p_cats = mysqli_query($con,$get_p_cats);

while ($row_p_cats=mysqli_fetch_array($run_p_cats)) {

$p_cat_id = $row_p_cats['p_cat_id'];

$p_cat_title = $row_p_cats['p_cat_title'];

echo "<option value='$p_cat_id' >$p_cat_title</option>";

}


?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Category </label>

<div class="col-md-6" >


<select name="cat" class="form-control" >

<option value="<?php echo $cat; ?>" > <?php echo $cat_title; ?> </option>

<?php

$get_cat = "select * from categories ";

$run_cat = mysqli_query($con,$get_cat);

while ($row_cat=mysqli_fetch_array($run_cat)) {

$cat_id = $row_cat['cat_id'];

$cat_title = $row_cat['cat_title'];

echo "<option value='$cat_id'>$cat_title</option>";

}

?>


</select>

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Image 1 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img1" class="form-control" >
<br><img src="warehouse_images/<?php echo $p_image1; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Image 2 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img2" class="form-control" >
<br><img src="warehouse_images/<?php echo $p_image2; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Image 3 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img3" class="form-control" >
<br><img src="warehouse_images/<?php echo $p_image3; ?>" width="70" height="70" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Price </label>

<div class="col-md-6" >

<input type="text" name="warehouse_price" class="form-control" required value="<?php echo $p_price; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Sale Price </label>

<div class="col-md-6" >

<input type="text" name="psp_price" class="form-control" required value="<?php echo $psp_price; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Keywords </label>

<div class="col-md-6" >

<input type="text" name="warehouse_keywords" class="form-control" required value="<?php echo $p_keywords; ?>" >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Warehouse Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Warehouse Features </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Sounds And Videos </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="warehouse_desc" class="form-control" rows="15" id="warehouse_desc">

<?php echo $p_desc; ?>

</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="warehouse_features" class="form-control" rows="15" id="warehouse_features">

<?php echo $p_features; ?>

</textarea>

</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="warehouse_video" class="form-control" rows="15">

<?php echo $p_video; ?>

</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Warehouse Label </label>

<div class="col-md-6" >

<input type="text" name="warehouse_label" class="form-control" required value="<?php echo $p_label; ?>">

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="update" value="Update Warehouse" class="btn btn-primary form-control" >

</div>

</div><!-- form-group Ends -->

</form><!-- form-horizontal Ends -->

</div><!-- panel-body Ends -->

</div><!-- panel panel-default Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- 2 row Ends --> 




</body>

</html>

<?php

if(isset($_POST['update'])){

$warehouse_title = $_POST['warehouse_title'];
$warehouse_cat = $_POST['warehouse_cat'];
$cat = $_POST['cat'];
$manufacturer_id = $_POST['manufacturer'];
$warehouse_price = $_POST['warehouse_price'];
$warehouse_desc = $_POST['warehouse_desc'];
$warehouse_keywords = $_POST['warehouse_keywords'];

$psp_price = $_POST['psp_price'];

$warehouse_label = $_POST['warehouse_label'];

$warehouse_url = $_POST['warehouse_url'];

$warehouse_features = $_POST['warehouse_features'];

$warehouse_video = $_POST['warehouse_video'];

$status = "warehouse";

$warehouse_img1 = $_FILES['warehouse_img1']['name'];
$warehouse_img2 = $_FILES['warehouse_img2']['name'];
$warehouse_img3 = $_FILES['warehouse_img3']['name'];

$temp_name1 = $_FILES['warehouse_img1']['tmp_name'];
$temp_name2 = $_FILES['warehouse_img2']['tmp_name'];
$temp_name3 = $_FILES['warehouse_img3']['tmp_name'];

if(empty($warehouse_img1)){

$warehouse_img1 = $new_p_image1;

}


if(empty($warehouse_img2)){

$warehouse_img2 = $new_p_image2;

}

if(empty($warehouse_img3)){

$warehouse_img3 = $new_p_image3;

}


move_uploaded_file($temp_name1,"warehouse_images/$warehouse_img1");
move_uploaded_file($temp_name2,"warehouse_images/$warehouse_img2");
move_uploaded_file($temp_name3,"warehouse_images/$warehouse_img3");

$update_warehouse = "update warehouses set p_cat_id='$warehouse_cat',cat_id='$cat',manufacturer_id='$manufacturer_id',date=NOW(),warehouse_title='$warehouse_title',warehouse_url='$warehouse_url',warehouse_img1='$warehouse_img1',warehouse_img2='$warehouse_img2',warehouse_img3='$warehouse_img3',warehouse_price='$warehouse_price',warehouse_psp_price='$psp_price',warehouse_desc='$warehouse_desc',warehouse_features='$warehouse_features',warehouse_video='$warehouse_video',warehouse_keywords='$warehouse_keywords',warehouse_label='$warehouse_label',status='$status' where warehouse_id='$p_id'";

$run_warehouse = mysqli_query($con,$update_warehouse);

if($run_warehouse){

echo "<script> alert('Warehouse has been updated successfully') </script>";

echo "<script>window.open('index.php?view_warehouses','_self')</script>";

}

}

?>

<?php } ?>
