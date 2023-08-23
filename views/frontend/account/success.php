<?php
use App\Models\User;

$user = new User();
if (isset($_POST['THEM'])) {
    $data = $_POST['data'];
    $user->user_insert($data);
}
?>
<?php require_once('views/frontend/header.php'); ?>
<div id="main" class="nh-row" style="text-align:center;height:350px;padding-top:50px">
    <div class="container">
        <div class="box-payment bottom">
            <div class="content-info-content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="img" style="display:flex;justify-content:center"><img style="width:100px"
                                src="public/images/TT.png" alt="img"></div>
                        <div class="success-box mx-auto">
                            <h3 class="title-success-order">Bạn đã đăng ký tài khoản thành công</h3>
                            <p>
                            <div class="home"><a href="index.php?">
                                    <button type="submit" class="btn btn-primary btn-block">Trang chủ</button></a>
                            </div>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>