<?php
session_start();
require_once("../vendor/autoload.php");
use App\Models\User;
$user = new User();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Đăng Ký</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../public/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../public/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../public/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page">
    <?php
    if (isset($_POST['DANGKY'])) {
        $data = $_POST['data'];
        $user->user_insert($data);
        header("location:index.php?option=user"); 
    }
    ?>
    <div class="login-box">
        <div class="login-logo">
            <a href="#"><b>Đăng Ký</b></a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                <p class="login-box-msg">Thông tin đăng ký</p>
                <form action="" name="frm1" method="post">
                    <div class="input-group mb-3">
                        <input name="data[username]" type="text" required class="form-control" placeholder="Tên đăng nhập ">
                        <div class="input-group-append">
                            <div class="input-group-text">
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="data[email]" type="text" required class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="data[phone]" type="text" required class="form-control" placeholder="Phone">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <i class="fas fa-phone"></i>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input name="data[password]" type="password" required class="form-control" placeholder="Mật Khẩu">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <button name="DANGKY" type="submit" class="btn btn-primary btn-block">Đăng Ký</button>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <?php echo isset($str_error) ? $str_error : ''; ?>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- /.login-box -->

        <!-- jQuery -->
        <script src="../public/plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="../public/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../public/dist/js/adminlte.min.js"></script>
</body>

</html>