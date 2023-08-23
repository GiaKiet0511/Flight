<?php
use App\Models\Bookingticket;

$bookingticket = new Bookingticket();
$id = $_REQUEST['id'];
$row = $bookingticket->bookingticket_row($id);

$list = $bookingticket->bookingticket_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=bookingticket&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT TÌM VÉ</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=bookingticket" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="id" value="<?php echo $row['id']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="id">id</label>
                                <input name="data[id]" value="<?php echo $row['id']; ?>" id="id" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="noiden">Nơi đến </label>
                                    <input name="data[noiden]" value="<?php echo $row['noiden']; ?>" id="noiden" type="text" class="form-control" required
                                        placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="loaive">Loại vé</label>
                                <input name="data[loaive]" value="<?php echo $row['loaive']; ?>" id="loaive" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="slve">Số lượng vé</label>
                                <input name="data[slve]" value="<?php echo $row['slve']; ?>" id="slve" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="ngaydi">Ngày đi</label>
                                <input name="data[ngaydi]" value="<?php echo $row['ngaydi']; ?>" id="ngaydi" type="date" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="ngayve">Ngày về</label>
                                <input name="data[ngayve]" value="<?php echo $row['ngayve']; ?>" id="ngayve" type="date" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="thanhtoan">Thanh toán</label>
                                <input name="data[thanhtoan]" value="<?php echo $row['thanhtoan']; ?>" id="thanhtoan" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="hoten">Họ tên</label>
                                <input name="data[hoten]" value="<?php echo $row['hoten']; ?>" id="hoten" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="ngaysinh">Ngày sinh</label>
                                <input name="data[ngaysinh]" value="<?php echo $row['ngaysinh']; ?>" id="ngaysinh" type="date" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="dienthoai">Điện thoại</label>
                                <input name="data[dienthoai]" value="<?php echo $row['dienthoai']; ?>" id="dienthoai" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="email">Email</label>
                                <input name="data[email]" value="<?php echo $row['email']; ?>" id="email" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
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