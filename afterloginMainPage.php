<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Main Page</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    
    <!-- Custom styles for this template -->
    <link href="css/mainpage.css" rel="stylesheet">
    
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
  
  .prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.background{
    width: auto;
    background-color: rgba(249, 241, 230, 1);
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


    </style>
    
    
</head>

<?php
    include('afterLoginClientNav.php'); 
?>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="img/promotion1.jpg" alt="flash sales" style="width:100%;max-height: 800px;">
    </div>
    <div class="carousel-item">
        <img src="img/promotion2.jpg" alt="super sales" style="width:100%;max-height: 800px;">
    </div>
    <div class="carousel-item">
        <img src="img/promotion3.jpg" alt="weekly" style="width:100%;max-height: 800px;">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
 
    
<div class="background-brand">
    <div class="header-custom">
        <h1>Shop By Brand</h1>
    </div>
    
    <div class="row" style="padding-left:30px;padding-top: 5px;justify-content: center;margin: auto;">
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/freelife.jpg" alt="freelife"></a>
              </div>
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/Comfort_Colors.jpg" alt="Comfort_Colors"></a>
              </div>
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/Rightway.jpg" alt="Rightway"></a>
              </div>
                <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                    <a href="#" style="stylesheet"><img src="img/oren.png" alt="oren"></a>
              </div>
        </div>

        <div class="row" style="padding-left:30px;padding-top: 5px;justify-content: center;margin: auto;">
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/Body-Glove.jpg" alt="body glove"></a>
              </div>
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/gildan.png" alt="Gildan"></a>
              </div>
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                  <a href="#" style="stylesheet"><img src="img/Apparel.jpg" alt="Apparel"></a>
              </div>
              <div class="column" style="padding-left:50px; padding-bottom: 20px;">
                    <a href="#" style="stylesheet"><img src="img/palomo.png" alt="palomo"></a>
              </div>
        </div>
</div>
    
<div class="background">
<div class="header-custom">
    <h1>Best Selling</h1>
</div>
<div class="row justify-content-md-center" style="margin-right:15px;" >
    <div class="col col-lg-2 " >
          <a href="#" style="stylesheet"><img src="img/bomber.jpg" alt="shirt"></a>
          <span class="row">Bomber Jacket</span>
          <span class="row">RM 49.99</span>
          
      </div>
      <div class="col col-lg-2" style="padding-left:50px; padding-bottom: 20px;">
          <a href="#" style="stylesheet"><img src="img/f1-uniform.jpg" alt="shirt"></a>
          <span class="row">F1 Uniform</span>
          <span class="row">RM 89.99</span>
      </div>
      <div class="col col-lg-2" style="padding-left:50px; padding-bottom: 20px;">
          <a href="#" style="stylesheet"><img src="img/best_selling3.png" alt="shirt"></a>
          <span class="row">Round Neck T-Shirt</span>
          <span class="row">RM 19.99</span>
      </div>
        <div class="col col-lg-2" style="padding-left:50px; padding-bottom: 20px;">
            <a href="#" style="stylesheet"><img src="img/best_selling4.png" alt="hoodie"></a>
            <span class="row">Sweater Hoodie</span>
            <span class="row">RM 69.99</span>
    </div>
  </div>
</div>


<div class="header-services">
        <div class="header-custom">
            <h1>Services</h1>
        </div>
    <div class="row justify-content-md-center" style="margin-right:15px;" >
                    <div class="col col-lg-2">
                        <a href="Heat-Transfer.php" style="stylesheet"><img src="img/heat-transfer - Copy.jpg" alt="heat-transfer"></a>
                        <h3>Heat Transfer</h3>
                        <p>Heat transfer printing is a newer decoration method, but it's come a long way from the iron-on decals of old.</p>

                    </div>
        
                    <div class="col col-lg-2">
                        <a href="Custom.php" style="stylesheet"><img src="img/customer-printing.png" alt="custom-design"></a>
                        <h3>Custom Design</h3>
                        <p>Custom t-shirts are like free off-the-clock marketing tool. Custom design t-shirts encourage employees and customers to wear them anytime anywhere with very comfortable atmosphere.</p>

                    </div>
        
                        <div class="col col-lg-2">
                            <a href="Silkscreen.php" style="stylesheet"><img src="img/screen-printing.jpg" alt="SilkScreen printing"></a>
                            <h3>Silkscreen Printing</h3>
                            <p>Silkscreen Printing is a stenciling method that involves printing ink through stencils that are supported by a porous fabric mesh stretched across a frame called a screen.</p>

                       </div>
        
                        <div class="col col-lg-2">
                            <a href="Embroidery.php" style="stylesheet"><img src="img/embroidery-Service.jpg" alt="embroidery-Service"></a>
                            <h3>Embroidery Printing</h3>
                            <p>Embroidery is a process where thread is stitched into your custom product. Some of the more popular items that embroidery is used for are: golf shirts, jackets, hats and corporate wear.</p>
                       </div>
    </div>                     
</div>  


  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>


</html> 
       
   
<?php
include('includes/footer.php');
?>