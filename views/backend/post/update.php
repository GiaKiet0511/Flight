<?php
use App\Models\Post;

$post = new Post();
$Id = $_REQUEST['Id'];
$row = $post->post_row($Id);

$list = $post->post_list(['status' => 'index']);
?>
<?php require_once('../views/backend/header.php'); ?>
<!-- Content Wrapper. Contains page content -->
<form name="form" action="index.php?option=post&cat=process" method="post">
    <div class="content-wrapper py-2">
        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <strong class="text-danger">CẬP NHẬT TIN TỨC</strong>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=post" class="btn btn-sm btn-success">
                                <i class="fas fa-arrow-circle-left"></i> Quay lại danh sách
                            </a>
                            <button class="btn btn-sm btn-success" name="CAPNHAT" style="submit">
                                <i class="fas fa-save"></i> Cập nhật </button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <input name="Id" value="<?php echo $row['Id']; ?>" type="hidden" />
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Id">Id</label>
                                <input name="data[Id]" value="<?php echo $row['Id']; ?>" id="Id" type="int" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Title">Title</label>
                                <input name="data[Title]" value="<?php echo $row['Title']; ?>" id="Title" type="text" class="form-control" required
                                    placeholder="Nhập dữ liệu" />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="mb-3">
                                <label for="Img">Img</label>
                                <input name="data[Img]" value="<?php echo $row['img']; ?>" id="img" type="text" class="form-control" required
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