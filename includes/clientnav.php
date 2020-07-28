
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
  
            <form class="modal-content animate" action="/action_page.php" method="post">
              <div class="imgcontainer">
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
              </div>
            </form>
        </div>
    </div>
  </nav>
</header>


