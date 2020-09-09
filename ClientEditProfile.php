<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Edit Profile</title>
        <link href="css/ClientEditProfile.css" rel="stylesheet">
        <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css'>
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

    
    <body>
        
        <?php
    include  ('includes/config.php');
    include ('afterLoginClientNav.php');
    
    $sql = "select * from  ceditprofile ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    
    if(isset($_POST['save'])){
        
    
    
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $fname = $_POST['fname'];
                $email = $_POST['email'];
                $username = $_POST['uname'];
                $password = $_POST['password'];
                $confirmpass = $_POST['cpass'];

                $sql = "update ceditprofile set fname='{$fname}',email='{$email}',uname='{$username}',password='{$password}',cpass='{$confirmpass}'";


                if ($conn->query($sql) === TRUE) {
                    echo "<br>";
                    echo "<br>";
                    echo "Record updated successfully";
                    } else {
                    echo "Error updating record " . $conn->error;
                    }


            }
    }
    $conn->close();
     
    ?>
        
        
<div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
     
      <div class="col-md-9 personal-info">
        
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Full Name:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="" name="fname">
            </div>
          </div>
          
          
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
                <input class="form-control" type="text" value="" name="email">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
                <input class="form-control" type="text" value="hsienjian" name="uname">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" value="" name="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
                <input class="form-control" type="password" value="" name="cpass">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
                <input type="submit" class="btn btn-primary" value="Save Changes" name="save">
              <span></span>
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
        
    </body>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>

</html>
<?php
include('includes/footer.php');
?>