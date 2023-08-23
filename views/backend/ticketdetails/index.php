<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails(); //Tạo đối tượng
$list = $ticketdetails->ticketdetails_list(['status' => 'index']);
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
                        <strong class="text-danger">CHI TIẾT VÉ</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=ticketdetails&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=ticketdetails&cat=trash" class="btn btn-sm btn-danger">
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
                            <th class="text-center">Giờ Đi</th>
                            <th class="text-center">Giờ Đến</th>
                            <th class="text-center">Điểm Đi</th>
                            <th class="text-center">Điểm Đến</th>
                            <th class="text-center">Ngày Bay</th>
                            <th class="text-center">Hạng ghế</th>
                            <th class="text-center">Giá Tiền</th>
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
                                    <?php echo $row['MaCTVe']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['GioDi']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['GioDen']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['DiemDi']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['DiemDen']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['NgayBay']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['HangGhe']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['GiaTien']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=ticketdetails&cat=update&MaCTVe=<?php echo $row['MaCTVe'];?>" class="btn btn-sm btn-info">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=ticketdetails&cat=deltrash&MaCTVe=<?php echo $row['MaCTVe'];?>" class="btn btn-sm btn-danger">
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