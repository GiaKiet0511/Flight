<?php
use App\Models\User;

$user = new User();
$id = $_REQUEST['id'];
$row = $user->user_row($id);

$list = $user->user_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=user&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT TÀI KHOẢN</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=user" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="id">id</label>
                                <input name="data[id]" value="<?php echo $row['id']; ?>" id="id" type="int"
                                    class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="username">username</label>
                                <input name="data[username]" value="<?php echo $row['username']; ?>" id="username" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="password">password</label>
                                <input name="data[password]" value="<?php echo $row['password']; ?>" id="password" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email">email</label>
                                <input name="data[email]" value="<?php echo $row['email']; ?>" id="email" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="roles">roles</label>
                                <input name="data[roles]" value="<?php echo $row['roles']; ?>" id="roles" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone">phone</label>
                            <input name="data[phone]" value="<?php echo $row['phone']; ?>" id="phone" type="int" class="form-control" required
                                placeholder="Nhập dữ liệu" />
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="data[status]" id="status" class="form-control">
                                <option value="1" <?php echo ($row['Status'] == 1) ? 'selected' : ''; ?>>1</option>
                                <option value="2" <?php echo ($row['Status'] == 2) ? 'selected' : ''; ?>>2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
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
</form>
<!-- /.content-wrapper -->
<?php require_once('../views/backend/footer.php'); ?>