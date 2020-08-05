 <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
   
      <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
     
</head>

<body>

<div class="wrapper">
<?php

include('includes/sidebar.php'); 
include('includes/adminnav.php'); 
?>

    <div class="container ">
     <h4 class="h4">Edit Product</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">All Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit product</li>
                </ol>
            </nav>
        </div>
        
    </div>
     
    </div>
<form class=" container form-horizontal bg-info">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_id" value="1" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name">PRODUCT NAME</label>  
  <div class="col-md-4">
      <input id="product_name" name="product_name"  value="Round Neck T-Shirt with customized A3 size printing" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>



<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_categorie">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="product_categorie" name="product_categorie" class="form-control">
         <option value="T-Shirt">T-Shirt</option>
         <option value="Sweater">Sweater</option>
         <option value="Uniform">Uniform</option>
         <option value="Sport-Tee">Sport-Tee</option>
         <option value="Custom-Tee" selected>Custom-Tee</option>
    </select>
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_status">PRODUCT STATUS</label>
  <div class="col-md-4">
    <select id="product_status" name="product_status" class="form-control">
        <option value="Active" selected>Active</option>
        <option value="Inactive">Inactive</option>
      
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
      <input id="available_quantity" name="available_quantity"  value="45" class="form-control input-md"  type="number" min="1" max="50">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_weight">PRODUCT WEIGHT</label>  
  <div class="col-md-4">
      <input id="product_weight" name="product_weight" placeholder="PRODUCT WEIGHT" value="200g/m²" class="form-control input-md" required="" type="text">
    
  </div>
</div>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_material">PRODUCT MATERIAL</label>  
  <div class="col-md-4">
      <input id="product_material" name="product_material" placeholder="PRODUCT MATERIAL" value="100% Cotton" class="form-control input-md" required="" type="text">
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="product_material">PRODUCT SIZE</label> 
    <div class="col-md-4">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox1" value="option1" checked>
      <label class="form-check-label" for="sizeCheckbox1">XS</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox2" value="option2" checked>
      <label class="form-check-label" for="sizeCheckbox2">S</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox3" value="option3" checked>
      <label class="form-check-label" for="sizeCheckbox3">M</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox4" value="option4" checked>
      <label class="form-check-label" for="sizeCheckbox4">L</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox5" value="option5" checked>
      <label class="form-check-label" for="sizeCheckbox5">XL</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox6" value="option6" checked>
      <label class="form-check-label" for="sizeCheckbox6">2XL</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="sizeCheckbox7" value="option7" checked>
      <label class="form-check-label" for="sizeCheckbox7">3XL</label>
    </div>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="product_material">PRODUCT COLOR</label> 
    <div class="col-md-4">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="colorCheckbox1" value="option1" checked>
      <label class="form-check-label" for="colorCheckbox1">Red</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="colorCheckbox2" value="option2" checked>
      <label class="form-check-label" for="colorCheckbox2">Blue</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="checkbox" id="colorCheckbox3" value="option3" checked>
      <label class="form-check-label" for="colorCheckbox3">Black</label>
    </div>
   
    </div>
</div>

 <!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">main_image</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file" >
  </div>
</div>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">More_images</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="singlebutton"></label>
  <div class="col-md-4">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Edit</button>
  </div>
  </div>

</fieldset>
</form>

    
    
    
    
<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>