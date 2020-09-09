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
            $total = ($_POST['total']);
            $payment = ($_POST['payment']);
            $status = 'Pending';
            
            $sql="INSERT INTO `order`(`cusID`, `total`, `payment`, `status`) VALUES ($cus_id,$total,'$payment','$status')";
            $result = $conn->query($sql);
            
            if($result){
                $_SESSION['check']="true"; 
                $_SESSION['message'] = "Successfully Order!!!!";
                header('location: done.php');

            }else{
                $_SESSION['check']="false"; 
                $_SESSION['message'] = "Failed Order!!!!";
                header('location: done.php');
            }
            
        }
      if(isset($_POST['add'])){

        $ProdID = $_POST['product_id'];
        $ProdImg = $_POST['product_img'];
        $ProdP = $_POST['product_price'];
        $ProdN = $_POST['product_name'];
        $qty = $_POST['quantity'];
        $method = $_POST['method'];
        $color =$_POST['color'];
        $size = $_POST['size'];
        $cusID = 1;
        $query = "INSERT INTO `cart` ( `cus_id`, `prod_id`, `prod_img`, `prod_name`, `prod_method`, `prod_size`, `prod_color`, `prod_qty`, `prod_price`) VALUES ($cusID, $ProdID,'$ProdImg','$ProdN','$method','$size','$color',$qty,$ProdP)";

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


?>