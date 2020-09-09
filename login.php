<?php
session_start();
include ('includes/ClientLogin.php');
include('includes/clientnav.php');
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
        <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    
        <style>
       
        .navbar-custom { 
            background-color: #EBECF0; 
        } 
        
       .navbar-nav > li{
            margin-left:2px;
            margin-right:2px;
            font-size: 15px;
        }
    
        * {
            margin:0px;
            padding:0px;
        }
        
        body{
            font-size: 120%;
            background:#F8F8FF;
            
        }
        
        .header{
            width:30%;
            margin:50px auto 0px;
            color: white;
            background: #5F9EA0;
            text-align: center;
            border: 1px solid #B0C4DE;
            border-bottom: none;
            border-radius: 10px 10px 0px 0px;
            padding:20px;
        }
            .register{
            width:30%;
            margin: 0px auto;
            padding:30px;
            border: 1px solid #B0C4DE;
            
            border-radius: 0px 0px 10px 10px;
            }
            
            img.logo{
                padding-left: 40px;
            }
            
            .input-group{
                margin: 10px 0px 10px 0px;
            }
        
            .input-group label{
                display: block;
                text-align: left;
                margin:3px;
                
            }
            
            .input-group input{
                height:50px;
                width:93%;
                padding: 5px 10px;
                font-size:16px;
                border-radius: 5px;
                border:1px solid gray;
                
            }
            
            .btn{
                padding: 10px;
                font-size: 15px;
                color:white;
                background: #5F9EA0;
                border:none;
                border-radius: 5px;
                
                
         
    </style>
        
    </head>
    
    
    
    <body>
 
        <div class="header">
            <h2>Login</h2>
            
        </div>
        
        <form method="post"  class="register"  >
            
                <div class="imgcontainer">
                      
                    <img src="img/myprinting.png" alt="myprinting" class="logo" "width=400px" height=110px">
                </div>
  
            <div class="input-group">
                <label>Email</label>
                <input type="text" placeholder="abcdef@example.com" name="Email" required>
            </div>
            
            <div class="input-group">
                <label>Password</label>
                <input type="password" placeholder="Password" name="password" required>
            </div>
            
            <div class="input-group">
                <button type="submit" name="submit" value="Login" class="btn">Login</button>
                
            </div>
            <span><?php echo $error; ?></span>
            <p>
                <span class="psww">Forgot <a href="#">password?</a><br></span>
                <span class="">Not a member?<a href="register.php">Register</a> 
            </p>
        </form>
        
        
    </body>
    
<?php
    include('includes/footer.php');
?>

</html>

