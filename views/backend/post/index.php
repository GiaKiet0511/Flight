<?php
use App\Models\Post;

$post = new Post(); //Tạo đối tượng
$list = $post->post_list(['status' => 'index']);
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
                        <strong class="text-danger">TIN TỨC</strong>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="index.php?option=post&cat=insert" class="btn btn-sm btn-success">
                            <i class="fas fa-plus"></i> Thêm
                        </a>
                        <a href="index.php?option=post&cat=trash" class="btn btn-sm btn-danger">
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
                            <th class="text-center">Id</th>
                            <th class="text-center">Title</th>
                            <th class="text-center">Img</th>
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
                                    <?php echo $row['Id']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['Title']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['img']; ?>
                                </td>
                                <td class="text-center">
                                    <a href="index.php?option=post&cat=update&Id=<?php echo $row['Id']; ?>"
                                        class="btn btn-sm btn-info">
                                        <i class="far fa-edit"></i>
                                    </a>
                                    <a href="index.php?option=post&cat=deltrash&Id=<?php echo $row['Id']; ?>"
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