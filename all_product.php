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
   
    <link href="css/allproduct.css" rel="stylesheet">
    
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
<body class="d-flex flex-column h-100">
<?php
    include('includes/clientnav.php'); 
?>


<div class="spacing"></div>
                
              <div class="back-image" >
                  <div class="content">
                    <h1>ALL PRODUCT</h1>
                    <div class="border"></div>
                 
                 </div>  
                  </div>   
           <div class="gallery-section">
            <div class="inner-width">
              
                <div class="gallery">
                    <div class="space">
                        <a href="promotion.html" class="image">
                            <img src="img/t-shirt.png" alt="">
                        </a>
                    </div>
                    <div class="space">
                        <a href="program.html" class="image">
                            <img src="img/sweater-01.png" alt="">
                        </a>
                    </div>
                    <div class="space">
                        <a href="register.html" class="image">
                            <img src="img/uniform-01.png" alt="">
                        </a>
                    </div>
                    <div class="space">
                        <a href="../Jc/home.html" class="image">
                            <img src="img/sporttee-01.png" alt="">
                        </a>
                    </div>
                    <div class="space">
                        <a href="../Jc/home.html" class="image">
                            <img src="img/customtee-01.png" alt="">
                        </a>
                    </div>
                </div>
            </div>
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
    </script>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>
</body>
</html>