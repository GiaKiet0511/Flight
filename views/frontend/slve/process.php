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
            "subject" => 'Đặt vé',
            "body" => 'Wings xin chào!
            Đây là thông tin chi tiết vé đã đặt:
            Họ tên: ' . $_POST['HoTen'] . '
            Nơi đi: ' . $_POST['DiemDi'] . '
            Nơi đến: ' . $_POST['DiemDen'] . '
            Giờ đi: ' . $_POST['GioDi'] . '
            Giờ đến: ' . $_POST['GioDen'] . '
            Ngày đi: ' . $_POST['NgayBay'] . '
            Hạng ghế: ' . $_POST['HangGhe'] . '
            Số lượng vé đã đặt: ' . $_POST['slve'] . '
            Giá tiền: ' . $_POST['GiaTien'] * $_POST['slve'].' VNĐ '. '
            Giá tiền sẽ được biết sau khi đến quầy thanh toán.
            Bạn vui lòng đến quầy thanh toán trước giờ bay. 
            Ngày gửi: ' . date('Y-m-d H:i:s')
        ])
    ]
);
$result = curl_exec($ch);
header("location:index.php?option=slve/success");
// echo $result;
?>