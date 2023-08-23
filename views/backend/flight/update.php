<?php
use App\Models\Flight;

$flight = new Flight();
$MaChuyenBay = $_REQUEST['MaChuyenBay'];
$row = $flight->flight_row($MaChuyenBay);

$list = $flight->flight_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=flight&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT CHUYẾN BAY</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=flight" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaChuyenBay" value="<?php echo $row['MaChuyenBay']; ?>" type="hidden"/>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaChuyenBay">Mã Chuyến Bay</label>
                                <input name="data[MaChuyenBay]" value="<?php echo $row['MaChuyenBay']; ?>"
                                    id="MaChuyenBay" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="NgayBay">Ngày Bay</label>
                                <input name="data[NgayBay]" value="<?php echo $row['NgayBay']; ?>" id="NgayBay"
                                    type="date" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="ThoiGianBay">Thời Gian Bay</label>
                                <input name="data[ThoiGianBay]" value="<?php echo $row['ThoiGianBay']; ?>"
                                    id="ThoiGianBay" type="time" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="SoGheH1">Số Ghế Thương Gia</label>
                                <input name="data[SoGheH1]" value="<?php echo $row['SoGheH1']; ?>" id="SoGheH1"
                                    type="int" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="SoGheH2">Số Ghế Phổ Thông</label>
                                <input name="data[SoGheH2]" value="<?php echo $row['SoGheH2']; ?>" id="SoGheH1"
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