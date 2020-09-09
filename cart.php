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
   
    <link href="css/cart.css" rel="stylesheet">
    
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
    ?>
        <section class="jumbotron text-center bg-secondary text-white">
    <div class="container">
        <h1 class="jumbotron-heading">Shopping Cart</h1>
     </div>
</section>
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
    <form method="POST" action="checkout.php" >
<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Product img</th>
                            <th scope="col">Product</th>
                            <th scope="col">Method</th>
                            <th scope="col">Size</th>
                            <th scope="col">Color</th>
                            <th scope="col" class="text-center">Quantity</th>
                            <th scope="col" class="text-center">Price</th>
                            <th scope="col" class="text-center">Sub total</th>
                            <th scope="col" class="text-center">Action</th>
  
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            include('includes/config.php'); 
                             $cusID = $_SESSION['ID'];
                            $sql = "SELECT * FROM cart WHERE cus_id =$cusID";
                            $result = $conn ->query($sql);
                            $t1=0;
                            if($result){
                                $row = mysqli_num_rows($result); 
                                if($row >0){
                                    $cond ="true";
                                }else{
                                     $cond = "false";
                                }    
                               
                            }else{
                                 $cond = "false";
                            }
                            while($row=$result->fetch_assoc()):
                                $size =  explode("|",$row['prod_size']);
                                $color = explode("|",$row['prod_color']);
                                $colorN = $color[1];
                                $colorImg = $color[2];
                                $sizeN = $size[1]
                                
                        ?>
                            <tr> 
                                <td><img style="width: 100px;height: 100px;" src="img/custom/<?php echo $colorImg ?>" /> </td>
                                <td><?=$row['prod_name'] ?></td>
                                <td><?=$row['prod_method'] ?></td>
                                <td><?php echo $sizeN?></td>
                                <td><div class="circle color1" style="background-color:<?php echo $colorN?>;"></div></td>
                                <td>
                                    <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="50" value="<?=$row['prod_qty'] ?>"/>
                                    <?php $b=$row['prod_qty'];?>
                                </td>
                                <td class="text-right"><?php echo $row['prod_price'];  $a=0;$a=$row['prod_price']?></td>
                                <td class="text-right"><?php echo $t=$b*$a; ?></td>
                                <td class="text-right"><a href="cart_action.php?delete=<?=$row['cart_id']?>" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> </td>
                            </tr>
                            <?php $t1+=$t;?>
                         <?php  endwhile;?>
                        
                        <?php if($cond == "true"):?>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Sub-Total</td>
                            <td class="text-right">RM<?php echo $t1;?></td>
                            
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Shipping</td><?php $s=5;?>
                            <td class="text-right">RM 5.00</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Total</strong></td>
                            <td class="text-right"><strong>RM <?php echo ($t2 = $t1+$s);?></strong></td>
                        </tr>
                        <?php endif;?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a class="btn btn-block btn-light" href="all_product.php">Continue Shopping</a>
                </div>
                 <?php if($cond == "true"):?>
                <div class="col-sm-12 col-md-6 text-right">
                    <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" name="checkout"  value="Checkout">
                   <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
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
    </script>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
