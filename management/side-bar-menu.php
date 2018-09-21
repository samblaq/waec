<?php 
    $actual_link = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>

<ul class="sidebar-menu">
    <li >
        <a href="admin.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>

    <li class="treeview">
        <a href="Schools.php">
            <i class="fa fa-building-o"></i>
            <span>Schools</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="First_choice.php"><i class="fa fa-angle-double-right"></i> First Choice</a></li>
            <li><a href="Second_choice.php"><i class="fa fa-angle-double-right"></i> Second Choice</a></li>
            <li><a href="Third_choice.php"><i class="fa fa-angle-double-right"></i> Third Choice</a></li>
            <li><a href="Fourth_choice.php"><i class="fa fa-angle-double-right"></i> Fourth Choice</a></li>
            <li><a href="Fifth_choice.php"><i class="fa fa-angle-double-right"></i> Fifth Choice</a></li>
            <br>
        </ul>
    </li>
   <li>
        <a href="profile_student.php">
            <i class="fa fa-users"></i> <span>Students Profile</span> 
        </a>
    </li>
     <!--<li>
        <a href="customers.php">
            <i class="fa fa-users"></i> <span>Customers</span> 
        </a>
    </li>
    <li class="treeview">
        <a href="products.php">
            <i class="fa fa-laptop"></i>
            <span>Products</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="products.php"><i class="fa fa-angle-double-right"></i> Manage</a></li>
            <li><a href="addcomputer.php"><i class="fa fa-angle-double-right"></i> Add Computer</a></li>
            <li><a href="addphone.php"><i class="fa fa-angle-double-right"></i> Add Phone / Tablet</a></li>
            <li><a href="addotherproduct.php"><i class="fa fa-angle-double-right"></i> Add Other Product</a></li><br>
        </ul>
    </li>
    <li class="treeview">
        <a href="suppliers.php">
            <i class="fa fa-truck"></i>
            <span>Suppliers</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="suppliers.php"><i class="fa fa-angle-double-right"></i> Manage</a></li>
            <li><a href="addsupplier.php"><i class="fa fa-angle-double-right"></i> Add Supplier</a></li>
            <br>
        </ul>
    </li>
    <li class="treeview">
        <a href="suppliers.php">
            <i class="fa fa-gift"></i>
            <span>Logistics</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="pickups.php"><i class="fa fa-angle-double-right"></i> Pickups</a></li>
            <li><a href="deliveries.php"><i class="fa fa-angle-double-right"></i> Deliveries</a></li>
            <br>
        </ul>
    </li>

    <li>
        <a href="blog.php">
            <i class="fa fa-blog"></i> <span>Blog</span> 
        </a>
    </li>
    <li>
        <a href="accounts.php">
            <i class="fa fa-money"></i> <span>Accounts</span> 
        </a>
    </li>
    <li class="treeview">
        <a href="help.php">
            <i class="fa fa-question-circle"></i>
            <span>Help</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="orderhelp.php"><i class="fa fa-angle-double-right"></i> Orders</a></li>
            <li><a href="customerhelp.php"><i class="fa fa-angle-double-right"></i> Customers</a></li>
            <li><a href="productshelp.php"><i class="fa fa-angle-double-right"></i> Products</a></li>
            <li><a href="suppliershelp.php"><i class="fa fa-angle-double-right"></i> Suppliers</a></li>
            <li><a href="deliveryhelp.php"><i class="fa fa-angle-double-right"></i> Delivery</a></li>
            <br>
        </ul>
    </li>-->
</ul>