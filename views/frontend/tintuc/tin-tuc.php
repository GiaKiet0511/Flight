<?php
use App\Models\Post;

$post = new Post(); //Tạo đối tượng
$list = $post->post_list();
?>
<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content">
    <div class="container" style="text-align:center">
        <?php foreach ($list as $row): ?>
            <div class="hot_news1" style="padding-top: 10px; padding-bottom: 10px">
                <div class="img_hot_news">
                    <img style="width:500px;" src="public/banner/<?php echo $row['img'] ?>" alt="img">
                    <div class="main_content">
                        <h5 class="main_content-title is-large" style="font-size:20px">
                            <a href="<?php echo $row['link'] ?>&<?php echo $row['Id'] ?>"
                                style="text-decoration: none"><?php echo $row['Title'] ?></a>
                        </h5>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <div id="left_ads_float" style="bottom:24px; left: 30px; position:absolute; top:230px">
            <a href="#" target="_blank"><img src="public/banner/banner1.jpg" style="width:300px; height:550px" /></a>
        </div>
        <div id="left_ads_float" style="bottom:24px; left: 30px; position:absolute; top:950px">
            <a href="#" target="_blank"><img src="public/banner/banner2.png" style="width:300px; height:550px" /></a>
        </div>
        <div id="right_ads_float" style="bottom:24px; right: 30px; position:absolute; top:230px">
            <a href="#" target="_blank"><img src="public/banner/banner1.jpg" style="width:300px; height:550px" /></a>
        </div>
        <div id="right_ads_float" style="bottom:24px; right: 30px; position:absolute; top:950px">
            <a href="#" target="_blank"><img src="public/banner/banner2.png" style="width:300px; height:550px" /></a>
        </div>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>