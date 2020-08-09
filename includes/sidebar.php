   <!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <img style="width:220px;padding:5px;"src="img/myprinting.png" alt="logo">
            </div>

            <ul class="list-unstyled components">
                <h5 style="justify-content: center;text-align: center;">Admin Panel</h5>
                <div class="border"style="width: 100px;background: #333;margin: 20px  auto 20px;"></div>
                
                <li >
                    <a href="dashboard.php" >Dashboard</a>
                </li>
                <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Product</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu" >
                        <li>
                            <a href="adminproduct.php">All product</a>
                        </li>
                        <li>
                            <a href="adminAddProduct.php">Add product</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Category</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="admincategory.php">All category</a>
                        </li>
                        <li>
                            <a href="adminAddCategory.php">Add category</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="adminCustomer.php">Customer</a>
                </li>
                <li>
                    <a href="adminOrder.php">Order</a>
                </li>
            </ul>
        </nav>
