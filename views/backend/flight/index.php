<?php
use App\Models\Flight;

$flight = new Flight(); //Tạo đối tượng
$list = $flight->flight_list(['status' => 'index']);
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
                        <strong class="text-danger">CHUYẾN BAY</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=flight&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=flight&cat=trash" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i> Thùng rác
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr>
                            <th class="text-center" style="width:20px">#</th>
                            <th class="text-center">Mã Chuyến Bay</th>
                            <th class="text-center">Ngày giờ</th>
                            <th class="text-center">Thời gian bay</th>
                            <th class="text-center">Số Ghế Hạng Thương Gia</th>
                            <th class="text-center">Số ghế hạng Phổ Thông</th>
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
                                    <?php echo $row['MaChuyenBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['NgayBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ThoiGianBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['SoGheH1']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['SoGheH2']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=flight&cat=update&MaChuyenBay=<?php echo $row['MaChuyenBay']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=flight&cat=deltrash&MaChuyenBay=<?php echo $row['MaChuyenBay']; ?>"
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
<script>
    let table = new DataTable('#myTable');
</script>
<?php require_once('../views/backend/footer.php'); ?>