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
   
    <link href="css/custom-tee.css" rel="stylesheet">
    
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
    
    <div class="back-image" >
        <div class="container-fluid ">
        <div class="content">
            <div class="border"></div>
            <div class="head1-custom" >
                <h6>My Printing . Shop</h6>
            </div>
            <div class="head2-custom">
                <h1>Custom-Tee</h1>
            </div>
            <div class="border"></div>
        </div>
        </div>
    </div>

    <div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="all_product.php">All Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">custom-tee</li>
                </ol>
            </nav>
        </div>
    </div>
    </div>
    
    <div class="container">
        <div class="title-head"><h6>Guideline</h6></div>
        <div class="line"></div>
    </div>
    
    <div class="container">
        <div class="card mb-3 border-0">
            <img class="card-img-top img-fluid" src="img/steps.png" alt="Card image cap">
            <div class="card-body border-style">
              <h5 class="card-title">Contact Us</h5>
              <a href="https://wa.me/60163742396"><p class="card-text">Low - 016-374 2396</p></a>
              <a href="https://wa.me/60193218340"><p class="card-text">Puah- 019-321 8340</p></a><br>
             <div class="line"></div><br>
              <h6>Term & Condition</h6>
              <ul>
                  <li>Design duration will be in 5 days.</li>
                  <li>No changing allow after agree the design.</li>
                  <li>If any design or color out of our printing price field, the extra charge will be provided.</li>
                  <li>No extra charge provided when using your own design</li>
              </ul>
            </div>
    </div>
    </div>
   
    
    <div class="container" style="margin-bottom:30px;">
        <div class="title-head"><h6>Custom-tee (Unisex)</h6></div>
        <div class="line"></div>
    </div>
    
    <form method="POST" action="browse_product.php">
     <div class="container">
        
        <div class="card-deck ">
            <div class="card  border-0 ">
                <div class="img-block">
                    <a  class="img-hover"><img class="card-img-top img-fluid "  src="img/custom/52ECBE2E-7524-40F9-8032-589F5E16B653-400x400.jpeg" alt="Card image cap"></a>
                    <input   class="btn-view" name="submit" type="submit" value="View">
                </div>
                <div class="card-body">
                    
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized A3 size printing</h6>
                    <h4 class="card-text price">RM15.00</h4>
                   
                </div>
            </div>
            <div class="card  border-0 ">
                  <div class="img-block">
                    <a  class="img-hover"> <img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-A3-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
          
                <div class="card-body">
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized A3 size printing</h6>
                    <h4 class="card-text price">RM25.00</h4>
                   
                </div>
            </div>
            <div class="card  border-0">
                  <div class="img-block">
                      <a class="img-hover"><img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-front-A3-and-back-A4-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                
                <div class="card-body">
                        <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front A3 and back A4 size printing</h6>
                        <h4 class="card-text price">RM35.00</h4>
                </div>
            </div>
            <div class="card  border-0">
                  <div class="img-block">
                      <a class="img-hover"><img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-front-A4-and-back-A3-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                
                <div class="card-body">
                        <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front A4 and back A3 size printing</h6>
                        <h4 class="card-text price">RM35.00</h4></a>
                </div>
            </div>
            
            
       
    </div>
    </div>
    
     <div class="container">
        
        <div class="card-deck ">
            <div class="card  border-0 ">
                <div class="img-block">
                    <a class="img-hover"><img class="card-img-top img-fluid "  src="img/custom/Round-Neck-T-Shirt-with-customized-front-and-back-A4-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                <div class="card-body">
                    
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front and back A4 size printing</h6>
                    <h4 class="card-text price">RM35.00</h4>
                   
                </div>
            </div>
            <div class="card  border-0 ">
                  <div class="img-block">
                      <a class="img-hover"> <img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-front-and-back-logo-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
          
                <div class="card-body">
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front and back logo printing</h6>
                    <h4 class="card-text price">RM30.00</h4>
                   
                </div>
            </div>
            <div class="card  border-0">
                  <div class="img-block">
                      <a class="img-hover"><img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-front-logo-and-back-A3-size-printing-400x400.jpg" alt="Card image cap"></a>
                   <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                
                <div class="card-body">
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front logo and back A3 size printing</h6>
                        <h4 class="card-text price">RM30.00</h4>
                </div>
            </div>
            <div class="card  border-0">
                  <div class="img-block">
                      <a class="img-hover"><img class="card-img-top img-fluid" src="img/custom/Round-Neck-T-Shirt-with-customized-front-logo-and-back-A4-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                
                <div class="card-body">
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized front logo and back A4 size printing</h6>
                        <h4 class="card-text price">RM30.00</h4>
                </div>
            </div>
            
            
       
    </div>
    </div>
    
     <div class="container">
        
        <div class="card-deck ">
            <div class="card  border-0 ">
                <div class="img-block">
                    <a class="img-hover"><img class="card-img-top img-fluid "  src="img/custom/Round-Neck-T-Shirt-with-customized-logo-size-printing-400x400.jpg" alt="Card image cap"></a>
                    <input  class="btn-view" name="submit" type="submit" value="View">
                </div>
                <div class="card-body">
                    
                    <h6 class="card-title heading-deco">Round Neck T-Shirt with customized logo printing</h6>
                    <h4 class="card-text price">RM12.00</h4>
                   
                </div>
            </div>
            <div class="card  border-0 ">
                
            </div>
            <div class="card  border-0">
                 
            </div>
            <div class="card  border-0">
                
            </div>
            
            
       
    </div>
    </div>
    
    </form>
    
    
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
   
    </script>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>