<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>
    
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    
      <!-- Our Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

<div class="wrapper">
<?php

include('includes/sidebar.php'); 
include('includes/adminnav.php'); 
?>

    <div class="container ">
     <h4 class="h4">Product Variations</h4>
    <div class="row">
       <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="#">All Product</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Product Variations</li>
                </ol>
            </nav>
        </div>
        
    </div>
     
    </div>
     
    <div class="container mb-2">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Product ID</th>
                            <th scope="col">Image</th>
                            <th scope="col">Stock</th>
                            <th scope="col">Color</th>
                            <th scope="col">Size</th>
                            <th scope="col">Status</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                            include('includes/config.php'); 
                            if(isset($_GET['view'])){
                                $id = $_GET['view'];
                                
                                $sql = "SELECT DISTINCT PS.Stock_ID,Prod_ID,C.Color_Img,Color_Name,PS.Stock,S.Size_Name,PS.Stock_Status FROM customtee CT,size S,color C,prod_stock PS WHERE PS.Prod_ID =$id AND C.Color_ID=PS.Color_ID AND S.Size_ID=PS.Size_ID  ORDER BY PS.Color_ID ";
                                $result = $conn ->query($sql);
                            }
                            $i=0;
                            while($row=$result->fetch_assoc()):
                            $i++;
                        ?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?= $row['Prod_ID']?></td>
                            <td><img style="width: 70px;height: 70px;" src="img/custom/<?= $row['Color_Img']?>" /></td>
                            <td><?= $row['Stock']?></td>
                            <td><?= $row['Color_Name']?></td>
                            <td><?= $row['Size_Name']?></td>
                             <?php   
                                    $btnColor="";
                                   if($row['Stock_Status']==='Active' ){
                                       $btnColor = "btn-primary";
                                   }else if($row['Stock_Status']=='Inactive'){
                                        $btnColor = "btn-danger";
                                   }
                            ?>
                            <td><input type="button" class="btn btn-sm btn-primary <?php echo $btnColor;?>" value="<?= $row['Stock_Status']?>" disabled></td>
                            <td class="text-left">
                            <a href="adminEditProductVariations.php?edit=<?=$row['Stock_ID']?>" type="button" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></a> 
                            <a href="admin_php_code.php?del=<?=$row['Stock_ID']?>" type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a> 
                        
                            </td>
                        </tr>
                    <?php endwhile;?>
                    </tbody>
                </table>
            </div>
        </div>
       
        </div>
    </div>
 </div>

    
    
    
 <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
        });
    </script>
</body>

</html>
        