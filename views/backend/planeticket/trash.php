<?php
use App\Models\Planeticket;

$planeticket = new Planeticket(); //Tạo đối tượng
$list = $planeticket->planeticket_list(['status' => 0]);
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
                        <strong class="text-danger">THÙNG RÁC VÉ MÁY BAY BAY</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=planeticket" class="btn btn-sm btn-info">
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
                            <th class="text-center">Mã Vé</th>
                            <th class="text-center">Tình Trạng Vé</th>
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
                                    <?php echo $row['MaVe']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['TinhTrangVe']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=flight&cat=retrash&MaVe=<?php echo $row['MaVe']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    <a href="index.php?option=planeticket&cat=deltrash&MaVe=<?php echo $row['MaVe']; ?>"
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