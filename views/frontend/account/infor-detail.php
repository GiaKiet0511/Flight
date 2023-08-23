<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');

use App\Models\User;

$user = new User();

$username = $_REQUEST['id'];
$list_user = $user->user_list(['status' => 'index']);

?>
<?php require_once('views/frontend/header.php'); ?>

<head>
    <style>
        .image-upload>input {
            display: none;
        }
    </style>
</head>

<body>
    <section class="signup page_customer_account" style="height:350px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-9 col-right-ac">
                    <h1 class="title-head margin-top-0">Thông tin tài khoản</h1>
                    <?php foreach ($list_user as $row): ?>
                        <?php if ($row['username'] == $username): {
                            ?>
                                <p><strong>Họ tên:</strong>
                                    <?php echo $row['username']; ?>
                                </p>
                                <p> <strong>Email:</strong>
                                    <?php echo $row['email']; ?>
                                </p>
                                <p> <strong>SĐT:</strong>
                                    <?php echo $row['phone']; ?>
                                </p>
                                <?php
                        }
                        ?>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </div>
    </section>
</body>

<?php require_once('views/frontend/footer.php'); ?>