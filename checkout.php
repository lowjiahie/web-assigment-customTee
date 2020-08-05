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
    ?>
    
    <div class="container">
        <h3 class="h3">Checkout</h3>
        <div class="line"></div>
  
        <form action="action">
         <div class="col">
            <div class="row">
                
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card   border-top-0 border-left-0">
                        <div class="card-body">
                            <h4 class="card-title h4"><1>Billing Address</h4>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ask" id="askLogin" value="option1" onclick="show1()" checked>
                            <label class="form-check-label" for="askLogin">Already registered?</label>
                             <a href="#" type="button" class="btn btn-sm btn-secondary">Login</a> 
                          </div>
                          <div class="form-check">
                            <input class="form-check-input" type="radio" name="ask" id="askDetails" value="option2" onclick="show2()">
                            <label class="form-check-label mb-2" for="askDetails">New Address</label>
                          </div>
                            <div id="div1" class="hide">
                               
                                     <div class="form-group">
                                    <label for="guestName" >Name</label>
                                    <div >
                                      <input type="text" class="form-control form-control-sm" id="guestName" placeholder="Name">
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="guestEmail">Email</label>
                                    <div >
                                      <input type="email" class="form-control form-control-sm" id="guestEmail" placeholder="Email">
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="guestTel">Tel</label>
                                    <div >
                                        <input type="tel" class="form-control form-control-sm" id="guestTel" placeholder="Tel" pattern="^(\+?6?01)[0-46-9]-*[0-9]{7,8}$">
                                    </div>
                                  </div>
                                    
                                     <div class="form-group">
                                        <label for="inputAddress">Address</label>
                                        <div >
                                        <input type="text" class="form-control" id="inputAddress" placeholder="Address1">
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label for="inputAddress2">Address 2</label>
                                        <div >
                                        <input type="text" class="form-control" id="inputAddress2" placeholder="Address2">
                                        </div>
                                       
                                      </div>
                                      <div class="form-row">
                                        <div class="form-group col-md-4">
                                          <label for="inputCity">City</label>
                                          <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="form-group col-md-4 pt-2">
                                          <label for="inputState">State</label>
                                          <select id="inputState" class="form-control">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                          </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                          <label for="inputZip">PostCode</label>
                                          <input type="text" class="form-control" id="inputZip">
                                        </div>
                                      </div>
                                    
                                    
                            
                            </div>
                            </div>
                        </div>
                    </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="card border-top-0 border-left-0"">
                        <div class="card-body">
                            <h4 class="card-title h4"><2>Payment Method</h4>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="payment" id="payment2" value="option2" onclick="show3()" checked>
                            <label class="form-check-label mb-2" for="payment2">Touch and Go Ewallet</label>
                          </div>
                             <div class="form-check">
                                <input class="form-check-input" type="radio" name="payment" id="payment1" value="option1" onclick="show4()">
                            <label class="form-check-label" for="payment1">Credit Card</label>
                          </div>
                             <div id="div2" class="hide">
                                
                                     <div class="form-group">
                                    <label for="cardName" >Name</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardName" placeholder="Name on Card" required>
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardNo">VISA or MASTER</label>
                                    <div>
                                        <input type="text" class="form-control form-control-sm" id="cardNo" placeholder="Credit Card No." required>
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardExpires">Expires On</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardExpires" placeholder="MM/YY" required>
                                    </div>
                                  </div>
                                     <div class="form-group ">
                                    <label for="cardCVV">CVV</label>
                                    <div >
                                        <input type="text" class="form-control form-control-sm" id="cardCVV" placeholder="000" required>
                                    </div>
                                  </div>
                                    
                                  
                                </div>   
                        </div>
                    </div>
                     </div>
                <div class="col-12 col-md-6 col-lg-12">
                    <div class="card border-top-0 border-left-0"">
                        <div class="card-body">
                            <h4 class="card-title h4"><3>Review Your Order</h4>
                            <table class="table ">
                                <thead>
                                  <tr>
                                    <th scope="col">ITEM</th>
                                    <th scope="col">NAME</th>
                                    <th scope="col">SIZE</th>
                                    <th scope="col">COLOR</th>
                                    <th scope="col">QTY</th>
                                    <th scope="col" class="text-right">SUBTOTAL</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row"><img style="width: 50px;height: 50px;" src="img/custom/52ECBE2E-7524-40F9-8032-589F5E16B653-400x400.jpeg" /></th>
                                    <td>Round Neck T-Shirt with customized A3 size printing</td>
                                    <td>M</td>
                                    <td>Black</td>
                                    <td>1</td>
                                    <td class="text-right">RM15.00</td>
                                    
                                  <tr>
                                       
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Sub-Total</td>
                                        <td class="text-right">RM 15.00</td>

                                    </tr>
                                    <tr>
                                       
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>Shipping</td>
                                        <td class="text-right">RM 5.00</td>
                                    </tr>
                                    <tr>
                                       
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Grand Total</strong></td>
                                        <td class="text-right"><strong>RM 20.00</strong></td>
                                    </tr>
                                </tbody>
                              </table>
                                 <div class="col mb-2">
                                <div class="row justify-content-end">
                                   
                                    <div class="col-sm-12 col-md-3 text-right">
                                        <input class="btn btn-lg btn-block btn-success text-uppercase" type="submit" name="checkout"  value="Place Order Now">
                                    </div>
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
</body>
</html>