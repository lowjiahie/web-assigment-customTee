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
     <h4 class="h4">Dashboard</h4>
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item  active" aria-current="page">Dashboard</li>
                    
                </ol>
            </nav>
        </div>
    </div>
    </div>
    <div class="container mb-5">
 <div class="row justify-content-md-center">
    <div class="col col-lg-3">
       <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-white h6 text-lg-center">ORDER PENDING</h5>
          <h3 class="card-title text-white h3 text-lg-center">1</h3>
          
        </div>
      </div>
    </div>
     <div class="col col-lg-3">
       <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-white h6 text-lg-center">ORDER CANCEL</h5>
          <h3 class="card-title text-white h3 text-lg-center">0</h3>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
        <div class="card-body">
          <h5 class="card-title text-white h6 text-lg-center">ORDER COMPLETE</h5>
          <h3 class="card-title text-white h3 text-lg-center">1</h3>
        </div>
      </div>
    </div>
    <div class="col col-lg-3">
       <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
        <div class="card-body">
         <h5 class="card-title text-white h6 text-lg-center">Shipping</h5>
          <h3 class="card-title text-white h3 text-lg-center">1</h3>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="container mb-2">
       <h4 class="h4 mb-4">Recent Order</h4>
       <div class="text-right">
       <a href="#" type="button" class="btn btn-sm btn-primary mb-3 ">View All</a>
       </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Order ID</th>
                            <th scope="col">Item</th>
                            <th scope="col">Order by</th>
                            <th scope="col">Date</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col">Total</th>
                            <th scope="col">Action</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        
                        <tr>
                            <td>1001</td>
                            <td>Round Neck T-Shirt with customized A3 size printing</td>
                            <td>C0001</td>
                            <td>15/06/2020</td>
                            <td>91,Kampung Baru Bangi,43000 Kajang,Selangor.</td>
                            <td>
                                <input type="button"  class="btn btn-sm btn-primary" value="pending" disabled>
                            </td>
                            <td>RM 15.00</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button> 
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> 
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Round Neck T-Shirt with customized A3 size printing</td>
                            <td>C0001</td>
                            <td>15/06/2020</td>
                            <td>91,Kampung Baru Bangi,43000 Kajang,Selangor.</td>
                            <td>
                                <input type="button"  class="btn btn-sm btn-primary" value="pending" disabled>
                            </td>
                            <td>RM 15.00</td>
                            <td class="text-right">
                                <button type="button" class="btn btn-sm btn-secondary"><i class="fas fa-edit"></i></button> 
                                <button type="button" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> 
                            </td>
                        </tr>
                 
                    </tbody>
                </table>
            </div>
        </div>
       
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
        
        
        
       
