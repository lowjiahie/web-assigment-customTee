=
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
    <link href="css/pop-up-login.css" rel="stylesheet">
    <link href="css/sticky-footer-navbar.css" rel="stylesheet">
    <link href="css/ContactUs.css" rel="stylesheet">
    
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
<?php
    include('includes/clientnav.php'); 
?>
    
<body>
    
    <?php
  include ("includes/config.php");
                
        

        if(isset($_POST['submit'])){
            $firstname = ($_POST['firstname']);
            $email =($_POST['email']);
            $phonenumber = ($_POST['phonenumber']);
            $feedback = ($_POST['feedback']);
            
            $sql= "insert into feedback values('{}','{$firstname}','{$email}','{$phonenumber}','{$feedback}')";
            $result = $conn->query($sql);
            
            if($result){
                $msg = "Your feedback is successful ";
            }else{
                echo $conn->error;
            }
            
        }
        ?>
    
    
    
    
    
    <div class="slideshow" >
        <img src="img/contact-us.jpg" alt="CS" style="width:100%;">
        
 <div class="header-custom" style="background-color: #10AEA9;">
    <h1>Feedback Form</h1>

    <div class="container" style="border-radius:5px;background-color: whitesmoke;">
        <form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm()" method="post">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Email</label>
        <input type="text" id="lname" name="email" placeholder="example@gmail.com">

        <label for="phoneN">Phone Number</label>
        <input type="text" id="phoneN" name="phonenumber" placeholder="0193218340">

        <label for="feedback">Feedback</label>
        <textarea id="subject" name="feedback" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit" name="submit">

      </form>
    </div>
    
</div>                   
    </div>
<div class="custom-header">
    <div class="container">
        <div class="row" style="padding-top: 50px;justify-content: center;padding-bottom: 40px;">
            <div class="column" style="text-align:center; padding-bottom: 20px;">
                <a href="https://wa.link/lxgct5/"><img src="img/whatsappicon.png" alt="whatapps" style="height: 300px;border-radius: 50%;width: 300px;"></a>
                <h5>WhatsApps</h5>
            </div>  

            <div class="column" style="text-align:center;padding-left:400px; padding-bottom: 20px;">
                <a href="mailto:puahhj-wm19@student.tarc.edu.my"><img src="img/email1.png" alt="email" style="height: 300px;width: 300px;"></a>
                 <h5>Email</h5>
            </div>
            
            <div class="column" style="text-align:center; padding-bottom: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.8872102578584!2d101.70849071513736!3d3.124516897724832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc361c4e354c67%3A0xdf9d07805ca3f5e2!2sSouthgate%20Commercial%20Center!5e0!3m2!1sen!2smy!4v1596080095515!5m2!1sen!2smy" width="1000" height="600" frameborder="0" style="border-radius:20px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    
            </div>
        </div>
        
    </div>  
</div>
       

    


</body>


 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="assets/dist/js/bootstrap.bundle.js"></script>


</html>
<?php
include('includes/footer.php');
?>