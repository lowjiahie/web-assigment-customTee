<?php
    session_start();
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en" class="h-100">
    <head >
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>Z</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">
     <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
   
    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <link href="css/cart.css" rel="stylesheet">
    
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
    .msg {
            margin: 30px auto; 
            padding: 10px; 
            border-radius: 5px; 
            width: 50%;
            text-align: center;
        }   

    </style>

    
    
</head>
    <body>
      <?php
        include('includes/clientnav.php'); 
    ?>
        
     <table>
          <?php if (isset($_SESSION['message'])&&isset($_SESSION['check'])){?>
        <?php
            if($_SESSION['check']=='false'){
                $style='color:#fc3632;background:#FFCCCB; border: 1px solid #fc3632;';
            }else{
                $style='color:#3c763d;background:#dff0d8; border: 1px solid #3c763d;';
                                        
            }
            
        ?>
     <div class="msg" style="<?php echo $style?>">
		<?php 
                        echo $_SESSION['message'];
                       
                        unset($_SESSION['check']);
                        unset($_SESSION['message']);

                ?>
	</div>
      <?php };?>
    <div class="container mb-4">
        
    <div class="row">
        <div class="col-8">
            <div class="table-responsive">
                <table class="table table-borderless table-dark">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Customer ID</th>
                            <th scope="col">payment</th>
                            <th scope="col" >Status</th>
                            <th scope="col">Total</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        
                       <?php
                             require_once ('includes/config.php');
                            $sql = "SELECT * FROM `order` WHERE ";
                            $result = $conn ->query($sql);
                             while($row=$result->fetch_assoc()):
                        ?>                            
                             <tr>
                                <th scope="col"><?=$row['orderID']?></th>
                                <th scope="col"><?=$row['cusID']?></th>
                                <th scope="col"><?=$row['payment']?></th>
                                <th scope="col"><?=$row['status']?></th>
                                <th scope="col"><?=$row['total']?></th>
                            </tr>
                        
                       
                        <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
                
        
        </table>

            <a href="mainpage.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Back to home</a>










    </div>
  
        
        
    </body>
    
     
</html>

