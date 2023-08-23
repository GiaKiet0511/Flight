<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket(); //Tạo đối tượng
$list = $bookingticket->bookingticket_list(['status' => 0]);
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
                        <strong class="text-danger">THÙNG RÁC TÌM VÉ</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=bookingticket" class="btn btn-sm btn-info">
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
                            <th class="text-center">id</th>
                            <th class="text-center">Nơi đến</th>
                            <th class="text-center">Loại vé</th>
                            <th class="text-center">Số lượng vé</th>
                            <th class="text-center">Ngày đi</th>
                            <th class="text-center">Ngày về</th>
                            <th class="text-center">Thanh toán</th>
                            <th class="text-center">Họ tên</th>
                            <th class="text-center">Ngày sinh</th>
                            <th class="text-center">Điện thoại</th>
                            <th class="text-center">Email</th>
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
                                    <?php echo $row['id']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['noiden']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['loaive']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['slve']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ngaydi']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ngayve']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['thanhtoan']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['hoten']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['ngaysinh']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['dienthoai']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['email']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=bookingticket&cat=retrash&id=<?php echo $row['id']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="fas fa-trash-restore"></i>
                                    </a>
                                    <a href="index.php?option=bookingticket&cat=delete&id=<?php echo $row['id']; ?>"
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