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
    </style>
    
    
</head>
<body>
    <?php
        include('includes/clientnav.php'); 
        require_once ('includes/config.php');
        
          $sql = "select * from customer where ID = '1'";
          $result = $conn ->query($sql);
          $t1=0;

        while($row=$result->fetch_assoc()){
            $cusID = $row['ID'];
            $cusN = $row['CustomerName'];
            $cusP = $row['PhoneNumber'];
            $cusE = $row['Email'];
            $cusG = $row['Gender'];
            $cusAddress = $row['address'];
            
        }
    ?>
   
    
    <div class="container">
        <h3 class="h3">Checkout</h3>
        <div class="line"></div>
        
        
         <div class="col">
            <div class="row">
                
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card   border-top-0 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title h4"><1>Billing Address</h4>
                              
                                 
                                <div id="div1" class="">

                                         <div class="form-group">
                                        <label for="guestName" >Name</label>
                                        <div>
                                            <input type="text" class="form-control form-control-sm" id="guestName" value="<?php echo $cusN?>" placeholder="Name" name="name" disabled>
                                      
                                        </div>
                                      </div>
                                         <div class="form-group ">
                                        <label for="guestEmail">Email</label>
                                        <div >
                                            <input type="email" class="form-control form-control-sm" id="guestEmail"  value="<?php echo $cusE?>" placeholder="Email" name="email" disabled>
                                        </div>
                                      </div>
                                         <div class="form-group ">
                                        <label for="guestTel">Tel</label>
                                        <div >
                                            <input type="tel" class="form-control form-control-sm" id="guestTel" value="<?php echo $cusP?>" placeholder="Tel" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$" name="tel" disabled>
                                            
                                        </div>
                                      </div>
                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <div >
                                                <input type="text" class="form-control" id="gender" placeholder="Male | Female" value="<?php echo $cusG?>" name="gender" disabled>
                                            </div>
                                          </div>
                                         <div class="form-group">
                                            <label for="inputAddress">Address</label>
                                            <div >
                                                <input type="text" class="form-control" id="inputAddress" placeholder="Address1" value="<?php echo $cusAddress?>" name="address" disabled>
                                            </div>
                                          </div>
                                        
                                          </div>
                                       
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 col-md-12 col-lg-12">
                    <div class="card border-top-0 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title h4"><2>Payment Method</h4>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment2" value="TngNGo" onclick="show3()" checked>
                            <label class="form-check-label mb-2" for="payment2">Touch and Go E wallet</label>
                          </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment2" value="CashOnDelivery" onclick="show3()" >
                            <label class="form-check-label mb-2" for="payment2">Cash on delivery</label>
                          </div>
                             <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment" id="payment1" value="CardPayment" onclick="show4()">
                            <label class="form-check-label" for="payment1">Credit Card</label>
                          </div>
                            <div id="div2" class="hide" style="display:none;">
                                
                                     <div class="form-group">
                                    <label for="cardName" >Name</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardName" placeholder="Name on Card" >
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardNo">VISA or MASTER</label>
                                    <div>
                                        <input type="text" class="form-control form-control-sm" id="cardNo"  placeholder="Credit Card No." >
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardExpires">Expires On</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardExpires" placeholder="MM/YY" >
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardCVV">CVV</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardCVV" placeholder="000" >
                                    </div>
                                  </div>
                                    
                                  
                                </div>   
                        </div>
                    </div>
                     </div>
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card border-top-0 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title h4"><3>Review Your Order</h4>
                            <table class="table ">
                                <thead>
                                   <?php
                                        
                                        $sql = "select * from cart where cus_id = '1'";
                                        $result = $conn ->query($sql);
                                        $t1=0;
                                    
                                        while($row=$result->fetch_assoc()):
                                    ?>
                                        <tr> 
                                            <td><img style="width: 100px;height: 100px;" src="img/custom/<?=$row['prod_img'] ?>" /> </td>
                                            <td><?=$row['prod_name'] ?></td>
                                            <td><?=$row['prod_method'] ?></td>
                                            <td><?=$row['prod_size'] ?></td>
                                            <td><div class="circle color1" style="background-color:<?=$row['prod_color'] ?>;"></div></td>
                                            <td>
                                                <input class="form-control" type="number" id="quantity" name="quantity" min="1" max="50" value="<?=$row['prod_qty'] ?>"/>
                                                <?php $b=$row['prod_qty'];?>
                                            </td>
                                            <td class="text-right"><?php echo $row['prod_price'];  $a=0;$a=$row['prod_price']?></td>
                                            <td class="text-right"><?php echo $t=$b*$a; ?></td>
                                        </tr>
                                        <?php $t1+=$t;?>
                                     <?php  endwhile;?>

                                 
                                    <tr>
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
                                        <td><strong>Total</strong></td>
                                        <td class="text-right"><strong>RM <?php echo ($t2 = $t1+$s);?></strong></td>
                                    </tr>
                                
                                </tbody>
                              </table>
                                 <div class="col mb-2">
                                <div class="row justify-content-end">
                                   <form action="cart_action.php" method="post" >
                                        <div class="col-sm-12 col-md-3 text-right">
                                            <input id="product_id" name="cus_id" value="<?php echo $cusID?>" type="hidden">
                                             
                                                 <input type="hidden" name="total" class="form-control form-control-sm" id="total" value="<?php echo $t2?>" >
                                                
                                                  <input class="form-check-input" type="hidden" name="payment" id="payment2" value="CashOnDelivery" >
                                                  <input class="form-check-input" type="hidden" name="payment" id="payment2" value="TngNGo">
                                                  <input class="form-check-input" type="hidden" name="payment" id="payment1" value="CardPayment">
                                                  <input class="btn btn-success" type="submit" name="checkout" value="Place Order Now">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        
                                 <div class="col mb-2">
                                <div class="row justify-content-end">
                                   
                                    <div class="col-sm-12 col-md-4">
                                        <p>* Required field</p>
                                        <p>You will be directed to the payment page after this</p>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                
               
            </div>

    </div>
            
                                

       </form>
    </div>    
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
    
    function form(x){
    if(x===0){
         document.getElementByid('form1').style.display='block';
    }
   else{
        document.getElementByid('form1').style.display='none';
   }
    return;
}
    </script>
    <script src="js/displayForm.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    </body>
</html>