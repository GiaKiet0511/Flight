<?php
use App\Models\Flightdetails;

$flightdetails = new Flightdetails(); //Tạo đối tượng
$list = $flightdetails->flightdetails_list(['status' => 'index']);
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
                        <strong class="text-danger">CHI TIẾT CHUYẾN BAY</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=flightdetails&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=flightdetails&cat=trash" class="btn btn-sm btn-danger">
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
                            <th class="text-center">Mã Chi Tiết Chuyến Bay</th>
                            <th class="text-center">Thời Gian Dừng</th>
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
                                    <?php echo $row['MaCTChuyenBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ThoiGianDung']; ?>
                                </td>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=flightdetails&cat=update&MaCTChuyenBay=<?php echo $row['MaCTChuyenBay'];?>" class="btn btn-sm btn-info">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=flightdetails&cat=deltrash&MaCTChuyenBay=<?php echo $row['MaCTChuyenBay'];?>" class="btn btn-sm btn-danger">
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