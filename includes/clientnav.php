<?php 
    session_start();
?>
<header style="height:90.20px;">
  <!-- Fixed navbar -->
  <nav class="navbar navbar-expand-xl navbar-custom navbar-light fixed-top">
    
     <a class="navbar-brand" href="mainpage.php"><img src="img/myprinting.png" alt="product" width="200px" height="px"></img></a>

     <link href="css/mainpage.css" rel="stylesheet">
    <link href="css/pop-up-login.css" rel="stylesheet">

    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
         <li class="nav-item">
             <a class="nav-link" href="mainpage.php">HOME</a>
        </li>
         <li class="nav-item">
             <a class="nav-link"  href="custom-tee.php">CUSTOM-TEE</a>
        </li>
        
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SERVICE</a>
        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="Custom.php">CUSTOM T-SHIRTS & UNIFORM</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Silkscreen.php">SILKSCREEN PRINTING</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Embroidery.php">EMBROIDERY SERVICE</a>
           <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="Heat-Transfer.php">HEAT TRANSFER PRINTING</a>
        </div>
         <li class="nav-item">
             <a class="nav-link" href="ContactUs.php">CONTACT US</a>
        </li>
        
       
        
       
      </ul>
      <form class="form-inline mt-0 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
      </form>
      <ul class="navbar-nav  mt-0 mt-sm-0">    
            <li class="nav-item">
                <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"style="margin:0 5px 0 0"></i>Cart</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link"  href="login.php"> <i class="fas fa-user" style="margin:0 5px 0 0" ></i>Login</a>
            </li>
             <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" onclick="document.getElementById('id01').style.display='block';" href="#"> <i class="fas fa-user" style="margin:0 5px 0 0" ></i>My Account</a>
                            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="ClientEditProfile.php">Edit Profile</a>
                                   <div class="dropdown-divider"></div>
                                   <a class="dropdown-item" href="logout.php">Logout</a>
                            </div>
                    </li>
      </ul>
       
    </div>
  </nav>
</header>


