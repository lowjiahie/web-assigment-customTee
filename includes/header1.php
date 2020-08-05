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
    
    <style>
        
         /* Modify the background color */ 
         .navbar-brand{
             margin-left: -10px;
         }
        .navbar-custom { 
            background-color: #EBECF0; 
        } 
        
       .navbar-nav > li{
            margin-left:2px;
            margin-right:2px;
            font-size: 15px;
        }
        
          input[type=text], input[type=password] {
              width: 100%;
              padding: 12px 20px;
              margin: 8px 0;
              display: inline-block;
              border: 1px solid #ccc;
              box-sizing: border-box;
            }

            /* Set a style for all buttons */
            .pop-btn {
              background-color: #4CAF50;
              color: white;
              padding: 14px 20px;
              margin: 8px 0;
              border: none;
              cursor: pointer;
              width: 100%;
            }

            button:hover {
              opacity: 0.8;
            }

            /* Extra styles for the cancel button */
            .cancelbtn {
              width: auto;
              padding: 10px 18px;
              background-color: #f44336;
            }

            /* Center the image and position the close button */
            .imgcontainer {
              text-align: center;
              margin: 24px 0 12px 0;
              position: relative;
            }
            
            .container {
              padding: 16px;
            }

            span.psw {
              float: top;
              padding-top: 10px;
            }

            span.register{
                float:bottom;
                padding-top: 10px;
            }
            
            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
              padding-top: 60px;
            }

            /* Modal Content/Box */
            .modal-content {
              background-color: #fefefe;
              margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
              border: 1px solid #888;
              width: 80%; /* Could be more or less, depending on screen size */
            }

            /* The Close Button (x) */
            .close {
              position: absolute;
              right: 25px;
              top: 0;
              color: #000;
              font-size: 35px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: red;
              cursor: pointer;
            }

            /* Add Zoom Animation */
            .animate {
              -webkit-animation: animatezoom 0.6s;
              animation: animatezoom 0.6s
            }

            @-webkit-keyframes animatezoom {
              from {-webkit-transform: scale(0)} 
              to {-webkit-transform: scale(1)}
            }

            @keyframes animatezoom {
              from {transform: scale(0)} 
              to {transform: scale(1)}
            }

            /* Change styles for span and cancel button on extra small screens */
            @media screen and (max-width: 300px) {
              span.psw {
                 display: block;
                 float: none;
              }
              .cancelbtn {
                 width: 100%;
              }
            }

            @media (max-width: 700px) {
              .div {   
                flex-direction: column;
                display: block;
                float: none;
              }
            }
       
    </style>
    <!-- Custom styles for this template -->
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
  </head>
  <body class="d-flex flex-column h-100">
    <header>
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-xl navbar-custom navbar-light fixed-top">
    
     <a class="navbar-brand" href="#"><img src="img/myprinting.png" alt="product" width="200px" height="px"></img></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item">
             <a class="nav-link" href="#">HOME</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ALL PRODUCT</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">T-SHIRTS</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">SWEATER</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">UNIFORM</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">SPORT-TEE</a>
                 <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">CUSTOM-TEE</a>
            </div>
        </li>
        <li class="nav-item ">
          <a class="nav-link" href="#">ABOUT US</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICE</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">CUSTOM T-SHIRTS & UNIFORM</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">SILKSCREEN PRINTING</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">EMBROIDERY SERVICE</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">HEAT TRANSFER PRINTING</a>
        </div>
         <li class="nav-item">
             <a class="nav-link" href="#">CONTACT US</a>
        </li>
        
       
        
       
      </ul>
      <form class="form-inline mt-0 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav  mt-0 mt-sm-0">    
            <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-shopping-cart"style="margin:0 5px 0 0"></i>Cart</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" onclick="document.getElementById('id01').style.display='block';" href="#"> <i class="fas fa-user"style="margin:0 5px 0 0" ></i>My Account</a>
            </li>
      
      </ul>
        <div id="id01" class="modal">
  
            <form class="modal-content animate" action="done.php" method="post">
              <div class="imgcontainer">
               <img src="img/myprinting.png" alt="myprinting" class="logo" width="600px" height="130px" >
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>

              </div>

              <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button class="pop-btn" type="submit">Login</button>
                <label>
                  <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
              </div>

              <div class="container" style="background-color:#f1f1f1">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="pop-btn cancelbtn">Cancel</button>
                <span class="psw">Forgot <a href="#">password?</a></span>
                <span class="register"><a href="register.php">Register</a></span>
              </div>
                
            </form>
        </div>
    </div>
  </nav>
</header>


