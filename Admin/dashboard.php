<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/dashboard.css">
    <title>admin dashboard</title>
</head>
<body>
<nav class="navbar navbar-light bg-light justify-content-between">

  <img src="../img/logo kids.jpg"width="180px">
  <a class="navbar-brand">Admin dashboard</a>
  <button class="btn btn-outline-primary" type="button">Logout</button>
</nav>
<!----------iframe------------->
<iframe src="create.php" frameborder="0" name="iframe" style="position:absolute; width:70em; height: 65em; margin-left:16%; "> </iframe>
    <!-- Main sidebar -->
<div class="asid"  style =" width:15%; position:absolute; margin-left:1%; margin-top:1%; padding-left:2%;">
    <div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
        <div class="sidebar-content">
            <!-- /Sidebar Category -->
            <div class="sidebar-category sidebar-default">
                <div class="category-title">
                    <span> Users</span>
                </div>
                <div class="category-content">
                    <ul id="fruits-nav" class="nav flex-column">
                    <li class="nav-item">
                            <a href="view.php" class="nav-link" target="iframe">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                view User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="create.php" class="nav-link" target="iframe">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Add User
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="Admin.php" class="nav-link" target="iframe">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                               Edit User
                            </a>
                        </li>
                    </ul>
                    <!-- /Nav -->
                </div>
                <!-- /Category Content -->
            </div>
            <!-- /Sidebar Category -->
            <div class="sidebar-category sidebar-default">
                <div class="category-title">
                    <span> Categories</span>
                </div>
               
                <div class="category-content">
                    <ul id="sidebar-editable-nav" class="nav flex-column">
                        <li class="nav-item">
                            <a href="/admin/customers" class="nav-link" target="iframe">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Add Category
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/resettest" class="nav-link" target="iframe">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Edit Category
                            </a>
                        </li>
                    </ul>
                    <!-- /Nav -->
                </div>
                <!-- /Category Content -->
            </div>
            <!-- /Sidebar Category -->
        </div>
        <div class="sidebar-category sidebar-default">
            <div class="category-title">
                <span>Products</span>
            </div>
            <div class="category-content">
                <ul id="sidebar-editable-nav" class="nav flex-column">
                    <li class="nav-item">
                        <a href="/admin/customers" class="nav-link" target="iframe">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Add product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/resettest" class="nav-link" target="iframe">
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                            Edit product
                        </a>
                    </li>
                </ul>
                <!-- /Nav -->
            </div>
            <!-- /Category Content -->
        </div>
    </div>
</div>
    <!-- /main sidebar -->
 <!-- end content-wrapper -->
</body>
</html>