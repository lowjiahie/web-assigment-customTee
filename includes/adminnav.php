
       <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                     <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto ">
                         
                        <li class="nav-item">
                            <a href="mainpage.php"class="nav-link" >Home</a> <!-- no more href , because it has drop down already -->
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" >My Account</a> <!-- no more href , because it has drop down already -->
                        </li>
                           <link rel="stylesheet" href="css/style.css">
                        <li class="nav-item">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user"></i><span id="space" style="padding-left: 5px;"></span><i class="fas fa-caret-down"></i>
                        </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="adminEditProfile.php">Edit Profile</a> 
                                
                                
                                <a class="dropdown-item" href="adminLogin.php">Logout</a> 
                            </div>
                        </li>
                    </ul>
                    </div>
                </div>
            </nav>