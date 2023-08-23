<?php
use App\Models\Flightroute;

$flightroute = new Flightroute(); //Tạo đối tượng
$list = $flightroute->flightroute_list(['status' => 0]);
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
                        <strong class="text-danger">THÙNG RÁC TUYẾN BAY</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=flightroute" class="btn btn-sm btn-info">
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
                            <th class="text-center">Mã Tuyến Bay</th>
                            <th class="text-center">Nơi Đi</th>
                            <th class="text-center">Nơi Đến</th>
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
                                    <?php echo $row['MaTuyenBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['NoiDi']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['NoiDen']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=flight&cat=retrash&MaTuyenBay=<?php echo $row['MaTuyenBay']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    <a href="index.php?option=flightroute&cat=deltrash&MaTuyenBay=<?php echo $row['MaTuyenBay']; ?>"
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