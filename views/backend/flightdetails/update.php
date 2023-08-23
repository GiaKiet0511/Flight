<?php
use App\Models\Flightdetails;

$flightdetails = new Flightdetails();
$MaCTChuyenBay = $_REQUEST['MaCTChuyenBay'];
$row = $flightdetails->flightdetails_row($MaCTChuyenBay);

$list = $flightdetails->flightdetails_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=flightdetails&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT CHI TIẾT CHUYẾN BAY</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=flightdetails" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaCTChuyenBay" value="<?php echo $row['MaCTChuyenBay']; ?>" type="hidden"/>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaCTChuyenBay">Mã Sân Bay</label>
                                <input name="data[MaCTChuyenBay]" value="<?php echo $row['MaCTChuyenBay']; ?>"
                                    id="MaCTChuyenBay" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="ThoiGianDung">Thời Gian Dừng</label>
                                <input name="data[ThoiGianDung]" value="<?php echo $row['ThoiGianDung']; ?>" id="ThoiGianDung"
                                    type="datetime" class="form-control" required placeholder="Nhập dữ liệu" />
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