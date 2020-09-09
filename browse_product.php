<?php
     session_start();
    
?>

<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Sticky Footer Navbar Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="css/browse_product.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
   
    <link href="css/pop-up-login.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">

    <style>
    .navbar-brand{
    margin-left: -10px
  }
  .navbar-custom { 
    background-color: #EBECF0; 
  } 
       
  .navbar-nav > li{
    margin-left:2px;
    margin-right:2px;
    font-size: 15px;
  }
    .msg {
            margin: 30px auto; 
            padding: 10px; 
            border-radius: 5px; 
            width: 50%;
            text-align: center;
        }   

    </style>

    
</head>
<body>

    <?php       
        include('includes/clientnav.php'); 
        require_once("includes/config.php"); 
        if(isset($_GET['view'])){
            $id = $_GET['view'];
            $res = mysqli_query($conn,"SELECT * FROM customtee WHERE ProductID=$id ");

            while($row= mysqli_fetch_assoc($res)){
                $ProdID = $row['ProductID'];
                $ProdN = $row['ProductName'];
                $ProdP = $row['Prod_Price'];
                $ProdW = $row['Prod_Weight'];
                $ProdM = $row['Prod_ Material'];
                $ProdImg = $row['Prod_Img'];
                $status = $row['All_Status'];
            }
            
            
        }
    ?>
    
    <div class="container" style="margin-top:20px; margin-bottom:-30px ; ">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="all_product.php">All Product</a></li>
                    <li class="breadcrumb-item"><a href="custom-tee.php">custom-tee</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Round Neck T-Shirt with customized A3 size printing</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
          <?php if (isset($_SESSION['message'])&&isset($_SESSION['check'])){?>
        <?php
            if($_SESSION['check']=='false'){
                $style='color:#fc3632;background:#FFCCCB; border: 1px solid #fc3632;';
            }else{
                $style='color:#3c763d;background:#dff0d8; border: 1px solid #3c763d;';
                                        
            }
            
        ?>
    <div class="msg" style="<?php echo $style?>">
		<?php 
                        echo $_SESSION['message'];
                       
                        unset($_SESSION['check']);
                        unset($_SESSION['message']);

                ?>
	</div>
      <?php };?>
    <div class="container">
    <div class="row">
        <div class="col-12 col-md-5 col-sm-12">
           
            <div class="card border-0 ">
                <div class="preview col-sm-12">
						
			<div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="img/custom/<?=$ProdImg?>" /></div>
                            <div class="tab-pane" id="pic-2"><img src="img/custom/crew_front.png" /></div>
                            <div class="tab-pane" id="pic-3"><img src="img/custom/crew_back.png" /></div>
                            <?php 
                                $sql = "select * from color";
                                $result = $conn ->query($sql);
                                $i=3;
                                while($row=$result->fetch_assoc()):
                                $i++;
                            ?>
                            <div class="tab-pane" id="pic-<?php echo $i?>"><img src="img/custom/<?= $row['Color_Img']?>" ></div>
                             <?php endwhile;?>
			</div>
			    <ul class="preview-thumbnail nav nav-tabs">
                                <li class="active"><a class="pic2" data-target="#pic-1" data-toggle="tab"><img class="pic1" src="img/custom/<?=$ProdImg?>" /></a></li>
                                <li><a href=".pic2" data-target="#pic-2" data-toggle="tab"><img class="pic2" src="img/custom/crew_front.png" /></a></li>
                                <li><a href=".pic2" data-target="#pic-3" data-toggle="tab"><img class="pic2" src="img/custom/crew_back.png"/></a></li>
                                <?php 
                                $sql = "select * from color";
                                $result = $conn ->query($sql);
                                $i=3;
                                while($row=$result->fetch_assoc()):
                                $i++;
                                ?>
                                <li><a href=".pic2" data-target="#pic-<?php echo $i?>" data-toggle="tab"><img class="pic2" src="img/custom/<?= $row['Color_Img']?>" /></a></li>
                               
                                <?php  endwhile;?>
			    </ul>			
		</div>

            </div>
   
        </div>
         <div class="col">
            <div class="row">
                
                <div class="col-12 col-md-12 col-lg-10">
                    <div class="card border-0">
                        <div class="card-body">
                            <h4 class="card-title h4"><?=$ProdN ?></h4>
                            <h3 class="card-text price">RM<?=$ProdP?></h3>
                            <p class="card-text text-set text-muted"><small>Material/Fabric : <?=$ProdM?><br>Weight:<?=$ProdW?><br>Sizes Available : XS-XL(Unisex)<br>Service: Heat Transfer Printing</small></p>
                            <form id="form" method="POST" action="cart_action.php">
                            <table>
                                 <input id="product_id" name="product_id" value="<?php echo $ProdID?>" type="hidden">
                                 <input id="product_name" name="product_name" value="<?php echo $ProdN?>" type="hidden">
                                 <input id="product_img" name="product_img" value="<?php echo $ProdImg?>" type="hidden">
                                 <input id="product_price" name="product_price" value="<?php echo $ProdP?>" type="hidden">
                                <tbody>
                                    <tr>
                                        <td>
                                            <span style="color:">Size : &nbsp;</span><span id="result" ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>
                                               <select id="selecter" onChange="dropdownTip(this.value)" name="size" style="margin-right:10px; margin-top:4px; margin-bottom: 7px;">
                                                    <option selected="selected" value="XS">XS</option>    
                                                    <option value="S">S</option>
                                                    <option value="M">M</option>
                                                    <option value="L">L</option>
                                                    <option value="XL">XL</option>
                                               </select>
                                                
                                            </span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span>Color : &nbsp;</span><span id="color-name" ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                             <div class="color-choose" >
                                                <div >
                                                    <input data-image="red" type="checkbox" id="red" name="color" value="Black" onclick="onlyOne(this)" onChange="showColor(this.value)">
                                                  <label for="red"><span style="background-color: #323232;"></span></label>
                                                </div>
                                                <div>
                                                  <input data-image="blue" type="checkbox" id="blue" name="color" value="Blue" onclick="onlyOne(this)"  onChange="showColor(this.value)">
                                                  <label for="blue"><span style="background-color:#314780;"></span></label>
                                                </div>
                                                <div>
                                                  <input data-image="black" type="checkbox" id="black" name="color" value="Red" onclick="onlyOne(this)"  onChange="showColor(this.value)">
                                                  <label for="black"><span style="background-color: #C91524;"> </span></label>
                                                </div>
                                             </div>
                                        </td>
                                        
                                    </tr>
                                     <tr>
                                        <td>
                                            <span style="color:">Method : &nbsp;</span><span id="method" ></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            
                                         <select id="method" name="method" onchange="showMethod(this.value)" style="margin-right:10px; margin-top:4px; margin-bottom: 7px;">
                                                <option selected="selected" value="Self Design" >Self Design</option>    
                                                <option value="Design by Us">Design by Us</option>
                                         </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div>
                                             <label for="quantity">QTY:</label>
                                              <input type="number" id="quantity" name="quantity" min="1" max="50" value="1">
                                               <button id="add" name="add" value="add" class="btn btn-primary">Add to Cart</button>

                                             </div>
                                        </td>
                                    </tr>
                           

                                </tbody>
                            </table>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
              
               
               
            </div>
        
        </div>
     
    </div>
    <div class="container" style="margin-bottom:10px;">
        <div class="title-head"><h6>Descriptions</h6></div>
        <div class="line"></div>
    </div>
    <div class="container">
        <div class="col-md-8 offset-md-2">
        <div class="card text-center">
        <div class="card-header">
  	<ul class="nav nav-tabs">
        		<li class="nav-item">
        			<a href="#colors" class="nav-link active" role="tab" data-toggle="tab">Colors</a>
        		</li>

        		<li class="nav-item">
        			<a href="#size" class="nav-link" role="tab" data-toggle="tab">Size</a>
        		</li>
        		<li class="nav-item">
        			<a href="#download" class="nav-link" role="tab" data-toggle="tab">Download</a>
        		</li>
        	</ul>

        	
        </div>
            <div class="card-body">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="colors">
                    <img class="img-fluid" src="img/custom/type_shirts.jpg" alt="Card image cap">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="size">
                    <img class="img-fluid" src="img/custom/size_chart.png" alt="Card image cap">
                </div>
                <div role="tabpanel" class="tab-pane fade" id="download">
                    <p class="h5 mb-5">Download and start your design</p>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <img class="img-fluid mb-5" src="img/custom/crew_front.png" alt="front.png">
                           
                        </div>
                        <div class="col-4">
                            <img class="img-fluid mb-5" src="img/custom/crew_back.png" alt="back.png">
                           
                        </div>
                     
                    </div>
                    
                    <a href="img/custom/custom.rar"class="btn btn-secondary btn-lg" download><i class="fa fa-download"></i> Download</a>
                </div>
        	</div>
        </div>
        </div>
        </div>
     </div>  
    
    <a class="gotopbtn" id="topbtn" href="#"> <i class="fas fa-angle-up"></i></a>    
    <script type="text/javascript" src="js/appeargotop.js"></script>
    
    <?php
        include('includes/footer.php'); 
    ?>
   
    <script>
    // Get the modal
    var modal = document.getElementById('id01');

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
       function dropdownTip(value){
        
        if(value === "XS"){
            value ="XS";
        }else if(value ==="S"){
            value = "S";
        }else if (value ==="M"){
            value = "M";
        }else if(value ==="L"){
            value ="L";
        }else if(value ==="XL"){
            value = "XL";
        }else{
            value="";
        }
        
        
        document.getElementById("result").innerHTML = value;
    }
       function showColor(value){
          
            if(value === "Black"){
                value ="Black";
            }else if(value ==="Blue"){
                value = "Blue";
            }else if (value ==="Red"){
                value = "Red";
            }else{
                value="";
            }
            document.getElementById("color-name").innerHTML = value;
    }
       function showMethod(value){
          
            console.log(value);
            document.getElementById("method").innerHTML = value;
    }
    
    function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('color');
    checkboxes.forEach((item) => {
        if (item !== checkbox){
             item.checked = false;
        } 
           
    })
    }
    
  
  
    </script>
    <script src="js/addtocart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>

