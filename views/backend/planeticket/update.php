<?php
use App\Models\Planeticket;

$planeticket = new Planeticket();
$MaVe = $_REQUEST['MaVe'];
$row = $planeticket->planeticket_row($MaVe);

$list = $planeticket->planeticket_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=planeticket&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT VÉ MÁY BAY</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=planeticket" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="MaVe" value="<?php echo $row['MaVe']; ?>" type="hidden"/>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaVe">Mã Vé</label>
                                <input name="data[MaVe]" value="<?php echo $row['MaVe']; ?>"
                                    id="MaVe" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="TinhTrangVe">Tình Trạng Vé</label>
                                <input name="data[TinhTrangVe]" value="<?php echo $row['TinhTrangVe']; ?>" id="TinhTrangVe"
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