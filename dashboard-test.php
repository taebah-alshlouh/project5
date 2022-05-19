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
    <link rel="stylesheet" href="dashboard.css">
    <title>admin dashboard</title>
</head>
<body>
    <header class="py-3 bg-dark">
        <a href="#" class="sidebar-toggler position-absolute m-2 bg-white d-block d-md-none" data-toggle="collapse" data-target="#sidebar-main" aria-controls="sidebar-main" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sidebar-toggler-icon"></span>
        </a>
        <h1 class="text-center text-white"><small>Admin Dashboard</small></h1>
    </header>
    
    <!-- Main sidebar -->
    <div id="sidebar-main" class="sidebar sidebar-default sidebar-separate sidebar-fixed">
        <div class="sidebar-content">
            <div class="sidebar-category sidebar-default">
                <div class="sidebar-user">
                    <div class="category-content">
                        <h6><?php   include_once './Configration/connection.php';
                                    ?></h6>
                        <small>Admin</small>
                    </div>
                </div>
            </div>
            <!-- /Sidebar Category -->
            <div class="sidebar-category sidebar-default">
                <div class="category-title">
                    <span>Fruits</span>
                </div>
                <div class="category-content">
                    <ul id="fruits-nav" class="nav flex-column">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Apple
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Banana
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Pear
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#other-fruits" class="nav-link" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="other-fruits">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                Others
                            </a>
                            <ul id="other-fruits" class="flex-column collapse">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        Orange
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a href="#" class="nav-link">
                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                        Kiwi
                                    </a>
                                </li>
                            </ul>
                            <!-- /Sub Nav -->
                        </li>
                    </ul>
                    <!-- /Nav -->
                </div>
                <!-- /Category Content -->
            </div>
            <!-- /Sidebar Category -->
            <div class="sidebar-category sidebar-default">
                <div class="category-title">
                    <span>Contenu éditable</span>
                </div>
                <div class="category-content">
                    <ul id="sidebar-editable-nav" class="nav flex-column">
                        <li class="nav-item">
                            <a href="/admin/customers" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                customers
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/resettest" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                reset test
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/usersprofiles" class="nav-link">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                users profiles
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/users" class="nav-link active">
                                <i class="fa fa-pencil" aria-hidden="true"></i>
                                users
                            </a>
                        </li>
                    </ul>
                    <!-- /Nav -->
                </div>
                <!-- /Category Content -->
            </div>
            <!-- /Sidebar Category -->
        </div>
    </div>
    <!-- /main sidebar -->
 <!-- end content-wrapper -->
</body>
</html>