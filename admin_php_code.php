<?php
     session_start();
     require_once ('includes/config.php');
      
        if (isset($_POST['editV'])) {
            $Sid = $_POST['stock_id'];
            $Pid = $_POST['product_id'];
            $stock = $_POST['available_quantity'];
            $PcolorID = $_POST['product_color'];
            $PsizeID = $_POST['product_size'];
            $status = $_POST['product_status'];
            
            $query= "update `prod_stock` set  `Stock`='$stock', `Stock_Status`='$status' WHERE Stock_ID=$Sid";
            $result = $conn->query($query);
            
            if($result){
                $_SESSION['check']="true"; 
                $_SESSION['message'] = "Successfully Updated!!!!";
                header('location: adminproduct.php');
            }else{
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "Failled Edit!!!!!"; 
                header('location: adminproduct.php');
            }
            
            
          
        }
	if (isset($_POST['add'])) {
            $file = $_FILES['img'];
            $fileName = $_FILES['img']['name'];
            $fileTmpName = $_FILES['img']['tmp_name'];
            $fileSize = $_FILES['img']['size'];
            $fileError = $_FILES['img']['error'];
            $fileType = $_FILES['img']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            $Pid = $_POST['product_id'];
            $Pname = $_POST['product_name'];
            $Pprice = $_POST['product_price'];
            $PWeight = $_POST['product_weight'];
            $PMaterial= $_POST['product_material'];
            $status = $_POST['product_status'];
            
            if(in_array($fileActualExt,$allowed)){
                if($fileError ===0){
                    if($fileSize < 1000000){
                        $fileNewName = uniqid('',true).".".$fileActualExt;
                        $fileDestination = 'img/custom/'.$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                       
                        $query = "INSERT INTO `customtee` (`ProductID`,`ProductName`,`Prod_Price`,`Prod_Weight`,`Prod_ Material`,`Prod_Img`,`All_Status`) VALUES ('$Pid','$Pname', '$Pprice','$PWeight','$PMaterial','$fileNewName','$status')"; 
                        $result = $conn->query($query);
                        if($result){
                            $_SESSION['check']="true"; 
                            $_SESSION['message'] = "Successfully Added!!!!";
                            header('location: adminproduct.php');

                        }else{
                            $_SESSION['check']="false"; 
                            $_SESSION['message'] = "Failed Added!!!!";
                            header('location: adminproduct.php');
                        }

                    }else{
                        $_SESSION['check']="false"; 
                        $_SESSION['message'] = "Your file is too big!!!";
                        header('location: adminproduct.php');
                    }
                }else{
                    $_SESSION['check']="false"; 
                    $_SESSION['message'] = "There was an error uploading your file!!!!";
                    header('location: adminproduct.php');
                }
            }else{
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "You cannot upload this type of file!!!!";
                header('location: adminproduct.php');
            }
        }
	if (isset($_POST['save'])) {
            $file = $_FILES['file'];
            $fileName = $_FILES['file']['name'];
            $fileTmpName = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];
            $fileError = $_FILES['file']['error'];
            $fileType = $_FILES['file']['type'];
            $fileExt = explode('.',$fileName);
            $fileActualExt = strtolower(end($fileExt));
            $allowed = array('jpg','jpeg','png');
            $Pid = $_POST['product_id'];
            $Pname = $_POST['product_name'];
            $Pprice = $_POST['product_price'];
            $PWeight = $_POST['product_weight'];
            $PMaterial= $_POST['product_material'];
            $status = $_POST['product_status'];
            
            if(in_array($fileActualExt,$allowed)){
                if($fileError === 0){
                    if($fileSize < 1000000){
                        $fileNewName = uniqid('',true).".".$fileActualExt;
                        $fileDestination = 'img/custom/'.$fileNewName;
                        move_uploaded_file($fileTmpName, $fileDestination);
                        
                        $query= "update `customtee` set `ProductName`='$Pname', `Prod_Price`='$Pprice', `Prod_Weight`='$PWeight', `Prod_ Material`='$PMaterial', `Prod_Img`='$fileNewName', `All_Status`='$status' WHERE ProductID=$Pid";
                        $result = $conn->query($query);
                        if($result){
                           
                            $query = "SELECT CT.ProductID,All_Status,PS.Prod_ID,Stock_Status FROM customtee CT, prod_stock PS WHERE CT.ProductID=$Pid";
                            $n= $conn->query($query);
                            while($row= $n->fetch_assoc()){
                                $ProdID = $row['ProductID'];
                                $All_Status = $row['All_Status'];
                                 $query= "update `prod_stock` set `Stock_Status`='$All_Status' WHERE Prod_ID=$ProdID";
                             $result1 = $conn->query($query);
                                if($result1){
                                  $_SESSION['check']="true";
                                  $_SESSION['message'] = "Successfully Updated!!!!";
                                  header('location: adminproduct.php');
                                }
                            }
                            
                        }else{
                            $_SESSION['check']="false"; 
                            $_SESSION['message'] = "Failed Edit!!!!";
                            header('location: adminproduct.php');
   
                        }

                    }else{
                        $_SESSION['check']="false"; 
                        $_SESSION['message'] = "Your file is too big!!!";
                        header('location: adminproduct.php');
                    }
                }else{
                    $_SESSION['check']="false"; 
                    $_SESSION['message'] = "There was an error uploading your file!!!!";
                    header('location: adminproduct.php');
                }
            }else{
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "You cannot upload this type of file!!!!";
                header('location: adminproduct.php');
            }
      
        }
        
        if (isset($_GET['del'])) {
           
            $id = $_GET['del'];
               

            $query= "DELETE FROM `prod_stock` WHERE Stock_ID=$id";
            $result = $conn->query($query);
            
            if($result){
                 $_SESSION['check']="true";
                 $_SESSION['message'] = "Successfully Deleted!!!!";
                 header('location: adminproduct.php');
            }else{
                $_SESSION['check']="false";
                $_SESSION['message'] = "Failed Delete!!!!";
                header('location: adminproduct.php');
            }
        }
        
        if (isset($_POST['addV'])) {
            $Pid = $_POST['product_id'];
            $stock = $_POST['available_quantity'];
            $Pcolor = $_POST['product_color'];
            $Psize = $_POST['product_size'];
            $status= $_POST['product_status'];
            
            $query = "SELECT COUNT(Prod_ID) AS NumberOfProducts FROM prod_stock WHERE Prod_ID=$Pid AND Color_ID=$Pcolor AND Size_ID=$Psize";
            $result = $conn->query($query);      
            $row = mysqli_fetch_array($result);
            $count = $row['NumberOfProducts'];
            if($count >0){
                
                $_SESSION['count']=$count; 
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "Failed Add This Variations Existing!!!!"; 
                header('location: adminproduct.php');

            }else if($count == 0){
                
                $query1 = "INSERT INTO `prod_stock` (`Color_ID`,`Size_ID`,`Prod_ID`,`Stock`,`Stock_Status`) VALUES ('$Pcolor','$Psize', '$Pid','$stock','$status')"; 
                $result1 = $conn->query($query1);
                if($result1){
                    $_SESSION['check']="true"; 
                    $_SESSION['message'] = "Successfully Added!!!!"; 
                    header('location: adminproduct.php');
                }else{
                    echo "<script type='text/javascript'>alert('Please Check Your Query');</script>";
                }
            }

        }
        $conn->close(); 
?>
