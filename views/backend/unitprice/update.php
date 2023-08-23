<?php
use App\Models\Unitprice;

$unitprice = new Unitprice();
$MaDonGia = $_REQUEST['MaDonGia'];
$row = $unitprice->unitprice_row($MaDonGia);

$list = $unitprice->unitprice_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=unitprice&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT ĐƠN GIÁ</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=unitprice" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaDonGia" value="<?php echo $row['MaDonGia']; ?>" type="hidden"/>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaDonGia">Mã Đơn Giá</label>
                                <input name="data[MaDonGia]" value="<?php echo $row['MaDonGia']; ?>"
                                    id="MaDonGia" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="USD">USD</label>
                                <input name="data[USD]" value="<?php echo $row['USD']; ?>" id="USD"
                                    type="int" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="VND">VND</label>
                                <input name="data[VND]" value="<?php echo $row['VND']; ?>" id="VND"
                                    type="int" class="form-control" required placeholder="Nhập dữ liệu" />
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