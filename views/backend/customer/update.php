<?php
use App\Models\Customer;

$customer = new Customer();
$MaKH = $_REQUEST['MaKH'];
$row = $customer->customer_row($MaKH);

$list = $customer->customer_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=customer&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT KHÁCH HÀNG</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=customer" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaKH" value="<?php echo $row['MaKH']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaKH">Mã Khách Hàng</label>
                                <input name="data[MaKH]" value="<?php echo $row['MaKH']; ?>" id="MaKH" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="TenKH">Tên Khách Hàng</label>
                                <input name="data[TenKH]" value="<?php echo $row['TenKH']; ?>" id="TenKH" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="GioiTinh">Giới Tính</label>
                                <input name="data[GioiTinh]" value="<?php echo $row['GioiTinh']; ?>" id="GioiTinh" type="int" class="form-control" required
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