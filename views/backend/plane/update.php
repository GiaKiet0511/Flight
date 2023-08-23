<?php
use App\Models\Plane;

$plane = new Plane();
$MaMayBay = $_REQUEST['MaMayBay'];
$row = $plane->plane_row($MaMayBay);

$list = $plane->plane_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=plane&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT MÁY BAY</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=plane" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaMayBay" value="<?php echo $row['MaMayBay']; ?>" type="hidden"/>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaMayBay">Mã Máy Bay</label>
                                <input name="data[MaMayBay]" value="<?php echo $row['MaMayBay']; ?>"
                                    id="MaMayBay" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="TenMayBay">Tên Máy Bay</label>
                                <input name="data[TenMayBay]" value="<?php echo $row['TenMayBay']; ?>" id="TenMayBay"
                                    type="text" class="form-control" required placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="img">img</label>
                                <input name="data[img]" value="<?php echo $row['img']; ?>" id="img"
                                    type="img" class="form-control" required placeholder="Nhập dữ liệu" />
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