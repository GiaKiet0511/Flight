<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
$list = $ticketdetails->ticketdetails_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=ticketdetails&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">THÊM CHI TIẾT VÉ</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=ticketdetails" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="THEM" style="submit">
                                <i class="fas fa-save"></i> Lưu </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="MaCTVe">Mã Chi Tiết Vé</label>
                                <input name="data[MaCTVe]" id="MaCTVe" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="GioDi">Giờ Đi</label>
                                <input name="data[GioDi]" id="GioDi" type="time" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="GioDen">Giờ Đến</label>
                                <input name="data[GioDen]" id="GioDen" type="time" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="DiemDi">Điểm Đi</label>
                                <input name="data[DiemDi]" id="DiemDi" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="DiemDen">Điểm Đến</label>
                                <input name="data[DiemDen]" id="DiemDen" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="NgayBay">Ngày Bay</label>
                                <input name="data[NgayBay]" id="NgayBay" type="date" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="HangGhe">Hạng Ghế</label>
                                <input name="data[HangGhe]" id="HangGhe" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="GiaTien">Giá Tiền</label>
                                <input name="data[GiaTien]" id="GiaTien" type="float" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="status">Status</label>
                                <select name="data[status]" id="status" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
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