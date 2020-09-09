<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>Admin Login</title>
        <style>
            .login{
                width:360px;
                margin:50px auto;
                font:Cambria, "Hoefler Text", "Liberation Serif",Times, "Times New Roman",serif;
                border-radius:10px;
                border-radius:10px;
                border:2px solid #ccc;
                padding:10px 40px 25px;
                margin-top:70px;
            }
            
            input[type=text],input[type=password]{
                width:90%;
                padding:10px;
                margin-top:8px;
                border:1px solid #ccc;
                padding-left:5px;
                font-size:16px;
                font-family:Cambria, "Hoefler Text", "Liberation Serif",Times, "Times New Roman",serif;
                
            }
            
            input[type=submit]{
                width:100%;
                background-color: #009;
                color:#fff;
                border:2px solid #06f;
                padding: 10px;
                font-size: 20px;
                cursor:pointer;
                border-radius: 5px;
                margin-bottom:15px;
            }
            
            
            .error {color: #FF0000;}

        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <?php
        $error=''; 
        if(isset($_POST['submit'])){
            if(empty($_POST['username'])|| empty($_POST['password_1'])){
                $error = "Username or Password is Invalid";
            }
            else
            {
                $username=$_POST['username'];
                $password_1=$_POST['password_1'];
                $conn = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($conn,"assignment");
                $query = mysqli_query($conn,"SELECT * FROM admin WHERE password_1='$password_1' AND username='$username'");
                
                $rows = mysqli_num_rows($query);
                if($rows ==1){
                    header("Location: dashboard.php"); 
                }
                else
                {
                    $error = "Username or Password is Invalid";
                }
                mysqli_close($conn);
            }
            
        }
        
        ?>
        
        <div class="login">
            <img src="img/myprinting.png" width="390px" height="120px">
            <h1 align="center">Login</h1>
            <form action="" method="post" style="text-align:center;">
                <input type="text" placeholder="UserName" id="username" name="username" required><br/><br/>
                <input type="password" placeholder="Password" id="password_1" name="password_1" required><br/><br/>
                <input type="submit" value="Login" name="submit">
                <span><?php echo $error; ?></span>
            </form>
            
        </div>
    </body>
   
</html>
