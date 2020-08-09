<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Customer</title>
        
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

        
        <h3>List Of Customer</h3>
        <table>
            
            <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Customer ID</th>
                            <th scope="col">Customer Name</th>
                            <th scope="col">Phone Number</th>
                            <th scope="col">Email</th>
                            <th scope="col">Gender</th>
                            <th scope="col" class="text-right">Action</th>
                            <th> </th>
                        </tr>
                    </thead>
                    
                    <?php
            $conn = new mysqli('localhost','root','','assignment');
            $sql = "select * from customer";
            $result = $conn ->query($sql);
            while($row=$result->fetch_assoc()){
                echo "<tr><td>{$row['ID']}</td><td>{$row['CustomerName']}</td><td>{$row['PhoneNumber']}</td><td>{$row['Email']}</td><td>{$row['Gender']}
                    </td><td class='text-right'><button type='button' class='btn btn-sm btn-danger'><i class='fa fa-trash'></i> </button> 
                    </td><td class='text-right'><button type='button' class='btn btn-sm btn-secondary'><i class='fas fa-edit'></i></button></td></tr>";
            
                }
            
            $conn->close();
            ?>
                    
                </table>
            </div>
        </div>
        
    </div>
</div>
            
            
        </table>











    </div>
    
    
</body>
    

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
    
</html>
