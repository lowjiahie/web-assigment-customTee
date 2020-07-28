<?php
include("loginserv.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->


<html>
    <head>
        <title>Login</title>
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
            
        </style>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="login">
            <img src="img/myprinting.png" width="390px" height="120px">
            <h1 align="center">Login</h1>
            <form action="" method="post" style="text-align:center;">
                <input type="text" placeholder="UserName" id="user" name="user"><br/><br/>
                <input type="password" placeholder="Password" id="pass" name="pass"><br/><br/>
                <input type="submit" value="Login" name="submit">
                <span><?php echo $error; ?></span>
            </form>
            
        </div>
    </body>
</html>
