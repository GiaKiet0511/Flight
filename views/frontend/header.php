<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/styles.css">
    <link rel="stylesheet" href="public/icons/themify-icons/themify-icons.css">
    <title>Wings</title>
    <script src="public/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="img_logo">
                    <img src="public/images/logo1.png" width="200" class="img-fluid" alt="LOGO">
                </div>
                <div class="slogan col-md-7">
                    <marquee class="slogan"><i class="ti-thought"></i>
                        Chuyến bay hướng đến tương lai. Chúng tôi luôn ở cạnh bạn.
                        <i class="ti-thought"></i>
                    </marquee>
                </div>
                <div class="account col-md-3">
                    <ul class="account">
                        <?php if (isset($_SESSION['useradmin'])) { ?>
                            <li><a href="index.php?option=account/logout"><span class="ti-share-alt"></span> Đăng xuất</a>
                            </li>
                            <li><a href="index.php?option=account/infor&id=<?php echo $_SESSION['username'] ?>"><span class="ti-user"></span>
                                    <?php echo $_SESSION['username'] ?>
                                </a></li>
                        <?php } else { ?>
                            <li><a href="index.php?option=account/register"><span class="account_icon ti-pencil-alt"></span>
                                    Register</a>
                            </li>
                            <li><a href="index.php?option=account/login"><span class="account_icon ti-user"></span>
                                    Login</a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end header -->

    <div class="navigation">
        <div class="container">
            <ul class="nav">
                <li><a href="index.php?option=home">Trang chủ</a></li>
                <li><a href="index.php?option=gioithieu/gioi-thieu">Giới thiệu</a></li>
                <li><a href="index.php?option=vemaybay/ve-may-bay">Vé máy bay giá rẻ</a></li>
                <li><a href="index.php?option=datve/dat-ve">Đặt vé</a></li>
                <li><a href="index.php?option=tintuc/tin-tuc">Tin tức</a></li>
                <li><a href="index.php?option=lienhe/lien-he">Liên hệ</a></li>
            </ul>
        </div>
    </div>
    <!--end navigation -->