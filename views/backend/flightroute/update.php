<?php
use App\Models\Flightroute;

$flightroute = new Flightroute();
$MaTuyenBay = $_REQUEST['MaTuyenBay'];
$row = $flightroute->flightroute_row($MaTuyenBay);

$list = $flightroute->flightroute_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=flightroute&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT TUYẾN BAY</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=flightroute" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaTuyenBay" value="<?php echo $row['MaTuyenBay']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaTuyenBay">Mã Sân Bay</label>
                                <input name="data[MaTuyenBay]" value="<?php echo $row['MaTuyenBay']; ?>" id="MaTuyenBay"
                                    type="int" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="NoiDi">Nơi Đi</label>
                                <input name="data[NoiDi]" value="<?php echo $row['NoiDi']; ?>" id="NoiDi"
                                    type="text" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="NoiDen">Nơi Đến</label>
                                <input name="data[NoiDen]" value="<?php echo $row['NoiDen']; ?>" id="NoiDen"
                                    type="text" class="form-control" required placeholder="Nhập dữ liệu" />
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