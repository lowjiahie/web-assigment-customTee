<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $error=''; 
        if(isset($_POST['submit'])){
            if(empty($_POST['user'])|| empty($_POST['pass'])){
                $error = "Username or Password is Invalid";
            }
            else
            {
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $conn = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($conn,"assignment");
                $query = mysqli_query($conn,"SELECT * FROM userpass WHERE pass='$pass' AND user='$user'");
                
                $rows = mysqli_num_rows($query);
                if($rows ==1){
                    header("Location: dashboard.php"); 
                }
                else
                {
                    $error = "Username of Password is Invalid";
                }
                mysqli_close($conn);
            }
        }
        ?>
    </body>
</html>
