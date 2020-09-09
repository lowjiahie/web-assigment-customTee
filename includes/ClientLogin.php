<?php

        $error=''; 
        
        if(isset($_POST['submit'])){
            if(empty($_POST['Email'])|| empty($_POST['password'])){
                $error = "Username or Password is Invalid";
            }
            else
            {
                $Email=$_POST['Email'];
                $password=$_POST['password'];
                $conn = mysqli_connect("localhost","root","");
                $db=mysqli_select_db($conn,"assignment");
                $query = "SELECT * FROM customer WHERE Email='$Email' AND password='$password'";
                $result = mysqli_query($conn,$query);
                  while($row= mysqli_fetch_assoc($result)){
                      $cus_id = $row['ID'];
                  }
                
                $rows = mysqli_num_rows($result);
                if($rows){
                    if(isset($_POST['Email'])&& isset($_POST['password'])){
                        
                        $_SESSION['ID']= $cus_id;
                        header("Location: afterLoginMainPage.php");
                    }
                    else{
                        header("Location: login.php");
                    }
                    
                }
                else
                {
                    $error = "Username or Password is Invalid";
                }
                mysqli_close($conn);
            }
            
        }
        
?>