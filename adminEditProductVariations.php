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
     <h4 class="h4">Edit Product Variations</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">All Product</a></li>
                    <li class="breadcrumb-item active"><a href="#">Product Variations</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Product Variations</li>
                </ol>
            </nav>
        </div>
        
    </div>
     
    </div>
    
<?php
   
    require_once("includes/config.php"); 
    if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $res = mysqli_query($conn,"SELECT * FROM prod_stock WHERE Stock_ID=$id ");
        
        while($row= mysqli_fetch_assoc($res)){
            $Stock_ID = $row['Stock_ID'];
            $ProdID = $row['Prod_ID'];
            $Color_ID = $row['Color_ID'];
            $Size_ID = $row['Size_ID'];
            $stock = $row['Stock'];
            $status = $row['Stock_Status'];
        }
        
        if($Color_ID === '1'){
            $colorCode = "#323232";
        }else if ($Color_ID === '2'){
             $colorCode = "#314780";
        }else if ($Color_ID === '3'){
            $colorCode="#C91524";
        }
        
        if($Size_ID === '1'){
            $SizeName = "XS";
        }else if ($Size_ID === '2'){
             $SizeName = "S";
        }else if ($Size_ID === '3'){
            $SizeName="M";
        }else if ($Size_ID === '4'){
            $SizeName="L";
        }else if ($Size_ID === '5'){
            $SizeName = "XL";
        }
        
    }
   

?>
    <form class=" container form-horizontal bg-info" method="POST" action="admin_php_code.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend></legend>

<input id="stock_id" name="stock_id" value="<?php echo $Stock_ID?>" type="hidden">
<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id"><b>PRODUCT ID</b></label>  
  <div class="col-md-4">
  <input  value="<?php echo $ProdID?>" placeholder="PRODUCT ID" class="form-control input-md"  type="text" disabled>
    <input id="product_id" name="product_id" value="<?php echo $ProdID?>" type="hidden">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_color_code"><b>PRODUCT COLOR CODE</b></label>  
  <div class="col-md-4">
      <input id="product_color_code1" name="product_color_code1" value="<?php echo $colorCode?>" placeholder="Color Code" class="form-control input-md" type="text" disabled>
      <input id="product_color_code" name="product_color_code" value="<?php echo $colorCode?>" placeholder="Color Code" class="form-control input-md" type="hidden">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_color"><b>PRODUCT COLOR</b></label>  
   <div class="col-md-4">
       <select id="product_color" name="product_color" class="form-control"disabled>
        <option value="1" <?php if ($Color_ID === '1') echo ' selected="selected"'?>>Black</option>
        <option value="2" <?php if ($Color_ID === '2') echo ' selected="selected"'?>>Blue</option>
        <option value="3" <?php if ($Color_ID === '3') echo ' selected="selected"'?>>Red</option>
    </select>
  </div>
</div>
<div class="form-group">
    <label class="col-md-4 control-label" for="product_size"><b>PRODUCT SIZE</b></label> 
    <div class="col-md-4">
     <select id="product_size" name="product_size" class="form-control" disabled>
        <option value="1"<?php if ($Size_ID === '1') echo ' selected="selected"'?>>XS</option>
        <option value="2"<?php if ($Size_ID === '2') echo ' selected="selected"'?>>S</option>
        <option value="3"<?php if ($Size_ID === '3') echo ' selected="selected"'?>>M</option>
        <option value="4"<?php if ($Size_ID === '4') echo ' selected="selected"'?>>L</option>
        <option value="5"<?php if ($Size_ID === '5') echo ' selected="selected"'?>>XL</option>
    </select>
    </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity"><b>AVAILABLE QUANTITY</b></label>  
  <div class="col-md-4">
      <input id="available_quantity" name="available_quantity"  value="<?php echo $stock?>" class="form-control input-md"  type="number" min="1" max="50">
  </div>
</div>
<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_status"><b>PRODUCT STATUS</b></label> 
  <div class="col-md-4">
    <select id="product_status" name="product_status" class="form-control">
        <option value="Active"<?php if ($status === 'Active') echo ' selected="selected"'?>>Active</option>
        <option value="Inactive"<?php if ($status === 'Inactive') echo ' selected="selected"'?>>Inactive</option>
      
    </select>
  </div>
</div>


<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="editV"></label>
  <div class="col-md-4">
      <button id="editV" name="editV" type="submit" class="btn btn-primary">Edit</button>
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

