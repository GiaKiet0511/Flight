<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wings</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../public/css/jquery.dataTables.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
    <!-- jQuery -->
    <script src="../public/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../public/js/jquery.dataTables.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../public/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../public/dist/js/demo.js"></script>
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="http://localhost/WebsiteVeMayBay/index.php?option=home" class="brand-link">
                <img src="../public/images/logo1.png" alt="Wings" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8">
                <span class="brand-text font-weight-light">Wings</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="../public/dist/img/matung.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="index.php" class="d-block">
                            <?php echo $_SESSION['username'] ?>
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Vé máy bay
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=plane" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Máy bay</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?option=flightroute" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tuyến bay</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?option=flight" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chuyến bay</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?option=flightdetails" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Chi tiết chuyến bay</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index.php?option=planeticket" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tình trạng vé máy bay</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Đặt vé
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=customer" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Thông tin khách hàng</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=bookingticket" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Tìm vé</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=ticketclass" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hạng vé</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=unitprice" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Đơn giá</p>
                                    </a>
                                </li>
                            </ul>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="index.php?option=invoice" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Hóa đơn</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?option=user" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tài khoản
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?option=staff" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Nhân viên
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?option=post" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Tin tức
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="index.php?option=regulations" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Quy định
                                </p>
                            </a>
                        </li>
                        <li class="nav-header">LABELS</li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link">
                                <i class="nav-icon far fa-circle text-danger"></i>
                                <p class="text">Đăng xuất</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-warning"></i>
                                <p>Warning</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon far fa-circle text-info"></i>
                                <p>Informational</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>