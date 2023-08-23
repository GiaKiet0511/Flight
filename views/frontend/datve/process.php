<?php
// use App\Models\Bookingticket;

// $bookingticket = new Bookingticket();
// if (isset($_POST['THEM'])) {
//     $data = $_POST['data'];
//     $bookingticket->bookingticket_insert($data);
//     header("location:index.php?option=datve/success");
// }
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
            Họ tên: ' . $_POST['hoten'] . '
            Ngày sinh: ' . $_POST['ngaysinh'] . '
            Email: ' . $_POST['email'] . '
            Điện thoại: ' . $_POST['dienthoai'] . '
            Nơi đến: ' . $_POST['noiden'] . '
            Loại vé: ' . $_POST['loaive'] . '
            Số lượng vé: ' . $_POST['slve'] . '
            Ngày đi: ' . $_POST['ngaydi'] . '
            Ngày về: ' . $_POST['ngayve'] . '
            Giá tiền: ' . $_POST['gia'] * $_POST['slve'].' VNĐ '. '
            Hình thức thanh toán: ' . $_POST['thanhtoan'] . '
            Bạn vui lòng đến quầy thanh toán trước giờ bay. 
            Ngày gửi: ' . date('Y-m-d H:i:s')
        ])
    ]
);
$result = curl_exec($ch);
header("location:index.php?option=datve/success");
?>