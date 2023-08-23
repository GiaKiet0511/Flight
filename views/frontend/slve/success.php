<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content">
    <div class="container" style="height:300px">
        <div class="success" style="margin:25px">
            <div class="img" style="display:flex;justify-content:center"><img style="width:100px" src="public/images/TT.png" alt="img"></div>
            <div class="success1" style="text-align:center"><h1>Đặt vé thành công</h1></div>
            <div class="content1" style="text-align:center"><p>Thông tin vé đã được gửi đến Email. Quý khách vui lòng kiểm tra Email.</p></div>
            <div class="content2" style="text-align:center"><a href="index.php"><button style="background-color:blue;color:white;border:none">Quay lại trang chủ</button></a></div>
        </div>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>