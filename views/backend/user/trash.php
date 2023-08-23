<?php
use App\Models\User;

$user = new User(); //Tạo đối tượng
$list = $user->user_list(['status' => 0]);
?>


<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper py-2">
    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <strong class="text-danger">THÙNG RÁC TÀI KHOẢN</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=user" class="btn btn-sm btn-info">
                            <i class="far fa-arrow-alt-circle-left"></i> Quay lại
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20px">#</th>
                            <th class="text-center">id</th>
                            <th class="text-center">username</th>
                            <th class="text-center">password</th>
                            <th class="text-center">email</th>
                            <th class="text-center">roles</th>
                            <th class="text-center">phone</th>
                            <th class="text-center">Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($list as $row): ?>
                            <tr>
                                <td class="text-center">
                                    <input name="checkid" type="checkbox">
                                </td>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['username']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['password']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['email']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['roles']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['phone']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=flight&cat=retrash&id=<?php echo $row['id']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    <a href="index.php?option=user&cat=delete&id=<?php echo $row['id']; ?>"
                                        class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php require_once('../views/backend/footer.php'); ?>