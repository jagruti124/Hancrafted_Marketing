<?php

if(!isset($_SESSION['admin_email'])){

echo "<script>window.open('login.php','_self')</script>";

}

else {

?>
<!DOCTYPE html>

<html>

<head>

<title> Insert Bundle </title>


<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'#warehouse_desc,#warehouse_features' });</script>

</head>

<body>

<div class="row"><!-- row Starts -->

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<ol class="breadcrumb"><!-- breadcrumb Starts -->

<li class="active">

<i class="fa fa-dashboard"> </i> Dashboard / Insert Bundle

</li>

</ol><!-- breadcrumb Ends -->

</div><!-- col-lg-12 Ends -->

</div><!-- row Ends -->


<div class="row"><!-- 2 row Starts --> 

<div class="col-lg-12"><!-- col-lg-12 Starts -->

<div class="panel panel-default"><!-- panel panel-default Starts -->

<div class="panel-heading"><!-- panel-heading Starts -->

<h3 class="panel-title">

<i class="fa fa-money fa-fw"></i> Insert Bundle

</h3>

</div><!-- panel-heading Ends -->

<div class="panel-body"><!-- panel-body Starts -->

<form class="form-horizontal" method="post" enctype="multipart/form-data"><!-- form-horizontal Starts -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Title </label>

<div class="col-md-6" >

<input type="text" name="warehouse_title" class="form-control" required >

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Url </label>

<div class="col-md-6" >

<input type="text" name="warehouse_url" class="form-control" required >

<br>

<p style="font-size:15px; font-weight:bold;">

Bundle Url Example : navy-blue-t-shirt

</p>

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Select A Manufacturer </label>

<div class="col-md-6" >

<select class="form-control" name="manufacturer"><!-- select manufacturer Starts -->

<option> Select A Manufacturer </option>


</select><!-- select manufacturer Ends -->

</div>

</div><!-- form-group Ends -->


<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Product Category </label>

<div class="col-md-6" >

<select name="warehouse_cat" class="form-control" >

<option> Select  a Product Category </option>


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

<option> Select a Category </option>

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

<label class="col-md-3 control-label" > Bundle Image 1 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img1" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Image 2 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img2" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Image 3 </label>

<div class="col-md-6" >

<input type="file" name="warehouse_img3" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Price </label>

<div class="col-md-6" >

<input type="text" name="warehouse_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Sale Price </label>

<div class="col-md-6" >

<input type="text" name="psp_price" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Keywords </label>

<div class="col-md-6" >

<input type="text" name="warehouse_keywords" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Tabs </label>

<div class="col-md-6" >

<ul class="nav nav-tabs"><!-- nav nav-tabs Starts -->

<li class="active">

<a data-toggle="tab" href="#description"> Bundle Description </a>

</li>

<li>

<a data-toggle="tab" href="#features"> Bundle Features </a>

</li>

<li>

<a data-toggle="tab" href="#video"> Sounds And Videos </a>

</li>

</ul><!-- nav nav-tabs Ends -->

<div class="tab-content"><!-- tab-content Starts -->

<div id="description" class="tab-pane fade in active"><!-- description tab-pane fade in active Starts -->

<br>

<textarea name="warehouse_desc" class="form-control" rows="15" id="warehouse_desc">


</textarea>

</div><!-- description tab-pane fade in active Ends -->


<div id="features" class="tab-pane fade in"><!-- features tab-pane fade in Starts -->

<br>

<textarea name="warehouse_features" class="form-control" rows="15" id="warehouse_features">


</textarea>

</div><!-- features tab-pane fade in Ends -->


<div id="video" class="tab-pane fade in"><!-- video tab-pane fade in Starts -->

<br>

<textarea name="warehouse_video" class="form-control" rows="15">


</textarea>

</div><!-- video tab-pane fade in Ends -->


</div><!-- tab-content Ends -->

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" > Bundle Label </label>

<div class="col-md-6" >

<input type="text" name="warehouse_label" class="form-control" required >

</div>

</div><!-- form-group Ends -->

<div class="form-group" ><!-- form-group Starts -->

<label class="col-md-3 control-label" ></label>

<div class="col-md-6" >

<input type="submit" name="submit" value="Insert Bundle" class="btn btn-primary form-control" >

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

if(isset($_POST['submit'])){

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

$status = "bundle";

$warehouse_img1 = $_FILES['warehouse_img1']['name'];
$warehouse_img2 = $_FILES['warehouse_img2']['name'];
$warehouse_img3 = $_FILES['warehouse_img3']['name'];

$temp_name1 = $_FILES['warehouse_img1']['tmp_name'];
$temp_name2 = $_FILES['warehouse_img2']['tmp_name'];
$temp_name3 = $_FILES['warehouse_img3']['tmp_name'];

move_uploaded_file($temp_name1,"warehouse_images/$warehouse_img1");
move_uploaded_file($temp_name2,"warehouse_images/$warehouse_img2");
move_uploaded_file($temp_name3,"warehouse_images/$warehouse_img3");

$insert_warehouse = "insert into warehouses (p_cat_id,cat_id,manufacturer_id,date,warehouse_title,warehouse_url,warehouse_img1,warehouse_img2,warehouse_img3,warehouse_price,warehouse_psp_price,warehouse_desc,warehouse_features,warehouse_video,warehouse_keywords,warehouse_label,status) values ('$warehouse_cat','$cat','$manufacturer_id',NOW(),'$warehouse_title','$warehouse_url','$warehouse_img1','$warehouse_img2','$warehouse_img3','$warehouse_price','$psp_price','$warehouse_desc','$warehouse_features','$warehouse_video','$warehouse_keywords','$warehouse_label','$status')";

$run_warehouse = mysqli_query($con,$insert_warehouse);

if($run_warehouse){

echo "<script>alert('Bundle has been inserted successfully')</script>";

echo "<script>window.open('index.php?view_bundles','_self')</script>";

}

}

?>

<?php } ?>
