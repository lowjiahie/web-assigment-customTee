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

 require_once("includes/config.php"); 
    if(isset($_GET['addV'])){
        $id = $_GET['addV'];
        }
?>
 <div class="container ">
     <h4 class="h4">Add Product variations</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="#">All Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Add product variations</li>
                </ol>
            </nav>
        </div>
        
    </div> 
    </div>
<form class=" container form-horizontal bg-info" method="POST" action="admin_php_code.php">
<fieldset>

<!-- Form Name -->
<legend></legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id"><b>PRODUCT ID</b></label>  
  <div class="col-md-4">
  <input  value="<?php echo $id?>" placeholder="PRODUCT ID" class="form-control input-md"  type="text" disabled>
    <input id="product_id" name="product_id" value="<?php echo $id?>" type="hidden">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">AVAILABLE QUANTITY</label>  
  <div class="col-md-4">
      <input id="available_quantity" name="available_quantity"  value="1" class="form-control input-md"  type="number" min="1" max="50">
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_color_code">PRODUCT COLOR CODE</label>  
  <div class="col-md-4">
      <input id="product_color_code1" name="product_color_code1" placeholder="Color Code" class="form-control input-md" type="text" disabled>
      <input id="product_color_code" name="product_color_code" placeholder="Color Code" class="form-control input-md" type="hidden">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="product_color">PRODUCT COLOR</label>  
   <div class="col-md-4">
       <select id="product_color" name="product_color" class="form-control" onchange="showCodeColor();">
            <?php
                $sql = "select * from color";
                $result = $conn ->query($sql);  
                while($row=$result->fetch_assoc()){
                    $ColorN = $row['Color_Name'];
                    $ColorID =$row['Color_ID'];
                    echo "<option value=\"$ColorID\">".$ColorN."</option>";
                }
            ?>
    </select>
  </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label" for="product_size">PRODUCT SIZE</label> 
    <div class="col-md-4">
     <select id="product_size" name="product_size" class="form-control">
            <?php
                $sql = "select * from size";
                $result = $conn ->query($sql);  
                while($row=$result->fetch_assoc()){
                    $SizeN = $row['Size_Name'];
                    $SizeID =$row['Size_ID'];
                    echo "<option value=\"$SizeID\">".$SizeN."</option>";
                }
            ?>
    </select>
    </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="product_status">PRODUCT STATUS</label> 
  <div class="col-md-4">
    <select id="product_status" name="product_status" class="form-control">
        <option value="Active">Active</option>
        <option value="Inactive">Inactive</option>
    </select>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="addV"></label>
  <div class="col-md-4">
    <button id="addV" name="addV" class="btn btn-primary">Add</button>
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
        
        function showCodeColor(){
            var color = document.getElementById("product_color");
            var storeText = color.options[color.selectedIndex].text;
             var colorCode = "";
            if(storeText === "Black"){
                colorCode = "#323232";
                document.getElementById("product_color_code1").value=colorCode;
                document.getElementById("product_color_code").value=colorCode;
            }else if (storeText === "Red"){
                colorCode = "#C91524";
                document.getElementById("product_color_code1").value=colorCode;
                document.getElementById("product_color_code").value=colorCode;
            }else if (storeText === "Blue"){
                colorCode = "#314780";
                document.getElementById("product_color_code1").value=colorCode;
                document.getElementById("product_color_code").value=colorCode;
            }
        }
    </script>
</body>

</html>