<?php
use App\Models\Staff;

$staff = new Staff();
$MaNhanVien = $_REQUEST['MaNhanVien'];
$row = $staff->staff_row($MaNhanVien);

$list = $staff->staff_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=staff&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT NHÂN VIÊN</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=staff" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaNhanVien" value="<?php echo $row['MaNhanVien']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaNhanVien">Mã Nhân Viên</label>
                                <input name="data[MaNhanVien]" value="<?php echo $row['MaNhanVien']; ?>" id="MaNhanVien" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="TenNhanVien">Tên Nhân Viên</label>
                                <input name="data[TenNhanVien]" value="<?php echo $row['TenNhanVien']; ?>" id="TenNhanVien" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="DiaChi">Địa Chỉ</label>
                                <input name="data[DiaChi]" value="<?php echo $row['DiaChi']; ?>" id="DiaChi" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="SĐT">SĐT</label>
                                <input name="data[SĐT]" value="<?php echo $row['SĐT']; ?>" id="SĐT" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
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