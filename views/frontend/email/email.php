<?php
if (isset($_POST['submit']))
    $url = "https://script.google.com/macros/s/AKfycbyrIx0Z1ni417ooKNaTefMhNQtvkC8tP7e9xGGAnPLbCIAD3vRHf69FillD7EyDxMcO/exec";
$ch = curl_init($url);
curl_setopt_array(
    $ch,
    [
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_POSTFIELDS => http_build_query([
            "recipient" => $_POST['email'],
            "subject" => 'Lien he',
            "body" => '
            Nội dung liên hệ của bạn:
            Họ tên: ' . $_POST['name'] . '
            Email: ' . $_POST['email'] . '
            Điện thoại: ' . $_POST['phone'] . '
            Nội dung: ' . $_POST['body'] . '
            Ngày gửi: ' . date('Y-m-d H:i:s')
        ])
    ]
);
$result = curl_exec($ch);
?>
<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content">
    <div class="container" style="height:300px">
        <div class="success" style="margin:25px">
            <div class="img" style="display:flex;justify-content:center"><img style="width:100px" src="public/images/TT.png" alt="img"></div>
            <div class="success1" style="text-align:center"><h1>Hệ thống đã nhận được phản hồi của bạn</h1></div>
            <div class="content1" style="text-align:center"><p>Bạn sẽ nhận được phản hồi của chúng tôi trong thời gian sớm nhất khoảng từ 3-5 ngày.</p></div>
            <div class="content2" style="text-align:center"><a href="index.php"><button style="background-color:blue;color:white;border:none">Quay lại trang chủ</button></a></div>
        </div>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>