<?php
     session_start();
   
      require_once ('includes/config.php');
      
        if (isset($_GET['delete'])) {
           
            $id = $_GET['delete'];
               

            $query= "DELETE FROM `cart` WHERE cart_id=$id";
            $result = $conn->query($query);
            
            if($result){
                 $_SESSION['check']="true";
                 $_SESSION['message'] = "Successfully Deleted!!!!";
                 header('location: cart.php');
            }else{
                $_SESSION['check']="false";
                $_SESSION['message'] = "Failed Delete!!!!";
                header('location: cart.php');
            }
        }
        
         if(isset($_POST['checkout'])){
            $cus_id = ($_POST['cus_id']);
            $subtotal =  ($_POST['subtotal']);
            $total = ($_POST['total']);
            $payment = ($_POST['payment']);
            $status = 'Pending';
            
            $sql = "SELECT COUNT(order_id) AS NumberOfOrders FROM all_order";
            $result = $conn ->query($sql);
            $row = mysqli_fetch_array($result);
            $count = $row['NumberOfOrders']+1;
            
            $sql="INSERT INTO `all_order`(`order_id`, `cus_id`, `payment_type`, `total`, `status`) VALUES ($count,$cus_id,'$payment',$total,'$status')";
            $result1 = $conn->query($sql);
            
            if($result1){
                
                $query = "SELECT * FROM `cart` WHERE cus_id =$cus_id";
                $result2 = $conn->query($query);
                if($result2){
                    while($row= mysqli_fetch_assoc($result2)){
                        $cart_id = $row['cart_id'];
                        $cus_id = $row['cus_id'];
                        $prod_id = $row['prod_id'];
                        $prod_img = $row['prod_img'];
                        $prod_name = $row['prod_name'];
                        $prod_method = $row['prod_method'];
                        $prod_size = $row['prod_size'];
                        $prod_color = $row['prod_color'];
                        $prod_qty = $row['prod_qty'];
                        $prod_price = $row['prod_price'];

                        $sql = "INSERT INTO `order_items`(`prod_id`, `order_id`, `prod_name`, `prod_method`, `size`, `color`, `qty`, `price`) VALUES ($prod_id,$count,'$prod_name','$prod_method',"
                                . "'$prod_size', '$prod_color',$prod_qty,$prod_price)";
                        $result3 = $conn->query($sql);
                        if($result3){
                            $query= "DELETE FROM `cart` WHERE cart_id=$cart_id";
                            $result4 = $conn->query($query);
                            if($result4){
                                $_SESSION['check']="true"; 
                                $_SESSION['message'] = "Successfully Order!!!!";
                            }else{
                                $_SESSION['check']="false"; 
                                $_SESSION['message'] = "Failed Order!!!!";
                            }
                     
                        }else{
                            $_SESSION['check']="false"; 
                            $_SESSION['message'] = "Failed Order!!!!";
                             
                        }
                          header('location: done.php?id='.$count);
                    }
                }else{
                    $_SESSION['check']="false"; 
                    $_SESSION['message'] = "adsdasd!!!!";
                    header('location: done.php');
                }
                

            }else{
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "123!!!!";
                header('location: done.php');
            }
            
        }
      if(isset($_POST['add'])){
        
        $cus_id = $_SESSION['ID'];
        $ProdID = $_POST['product_id'];
        $ProdImg = $_POST['product_img'];
        $ProdP = $_POST['product_price'];
        $ProdN = $_POST['product_name'];
        $qty = $_POST['quantity'];
        $method = $_POST['method'];
        $color = $_POST['color'];
        $size = $_POST['size'];
        $status = 'Active';
        $color1 = explode("|",$_POST['color']);
        $size1 = explode("|",$_POST['size']);
        
        $colorImg = $color1[2];
        $colorID=$color1[0];
        $sizeID=$color1[0];
        $cusID = 1;
        $query = "SELECT * FROM `prod_stock` WHERE Color_ID =$colorID AND Size_ID =$sizeID AND Prod_ID =$ProdID AND Stock_Status='Active'";
        $result1 = $conn->query($query);
        
        $row = mysqli_num_rows($result1);
        if($row ===0){
            
            $_SESSION['check']="false"; 
            $_SESSION['message'] = "Failed Add to Cart(This Variations not Available now)!!!!";
            header('location: browse_product.php?view='."$ProdID");
            
        }else{
            
            $query = "SELECT * FROM `cart` WHERE cus_id =$cus_id AND prod_id =$ProdID AND prod_size = '$size' AND prod_color='$color'";
            $result = $conn->query($query);
            $row = mysqli_num_rows($result);
            if($row === 0){
                
                while($row= mysqli_fetch_assoc($result1)){
                    $Stock_ID = $row['Stock_ID'];
                    $Color_ID = $row['Color_ID'];
                    $Size_ID = $row['Size_ID'];
                    $Prod_ID = $row['Prod_ID'];
                    $Stock = $row['Stock'];
                    $Stock_Status = $row['Stock_Status'];
                }

                $stockCheck = $Stock - $qty;
                if($stockCheck <0){
                    $_SESSION['check']="false"; 
                    $_SESSION['message'] = "Stock  Not insufficient!!!"."Current Stock(".$Stock.")";
                    header('location: browse_product.php?view='."$ProdID");
                }else{
                    $query = "INSERT INTO `cart` ( `cus_id`, `prod_id`, `prod_img`, `prod_name`, `prod_method`, `prod_size`, `prod_color`, `prod_qty`, `prod_price`) VALUES ($cus_id, $ProdID,'$colorImg','$ProdN','$method','$size','$color',$qty,$ProdP)";

                    $result = $conn->query($query);

                    if($result){
                        $_SESSION['check']="true"; 
                        $_SESSION['message'] = "Successfully Add to Cart!!!!";
                        header('location: browse_product.php?view='."$ProdID");

                    }else{
                        $_SESSION['check']="false"; 
                        $_SESSION['message'] = "Failed Add to Cart!!!!";
                        header('location: browse_product.php?view='."$ProdID");
                    }
                }
                
            }else{
                
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "This Item Existing In Your Cart!!!";
                header('location: browse_product.php?view='."$ProdID");
                
             
            }
            
            
        }
      
        
      
        
        
    }


?>