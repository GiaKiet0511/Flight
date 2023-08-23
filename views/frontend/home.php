<?php
use App\Models\Ticketclass;

$ticketclass = new Ticketclass();
$list = $ticketclass->ticketclass_list();

use App\Models\Flightroute;

$flightroute = new Flightroute();
$list1 = $flightroute->flightroute_list();

use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
$list2 = $ticketdetails->ticketdetails_list();

use App\Models\Post;

$post = new Post();
$list3 = $post->post_list();

use App\Models\Regulations;

$regulations = new Regulations();
$list4 = $regulations->regulations_list();

use App\Models\Flight;

$flight = new Flight();
$list5 = $flight->flight_list();
?>
<?php
if (!isset($_SESSION)) {
    session_start();
}
date_default_timezone_set('Asia/Ho_Chi_Minh') ?>
<?php require_once('views/frontend/header.php'); ?>
<div class="slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="public/slider/slider3.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/slider/slider2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="public/slider/slider1.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<!--end slider -->

<div class="content">
    <div class="container">
        <div class="ticket_banner">
            <div class="ticket_search">
                <div class="ticket_flight">
                    Vé máy bay
                </div>
                <div class="ticket" style="height:320px">
                    <div class="information">
                        <form>
                            <input name="gender" checked="checked" type="radio" value="mot chieu" />Một chiều
                            <input name="gender" type="radio" value="khu hoi" />Khứ hồi
                        </form>
                    </div>
                    <div class="details">
                        <div class="location">
                            <div class="start">
                                <label class="departure">
                                    <div class="from">Từ</div>
                                </label>
                                <div class="place ">
                                    <select name="plane" id="plane" style="width:200px">
                                        <?php foreach ($list1 as $row): ?>
                                            <option value="<?php echo $row1['NoiDi']; ?>"><?php echo $row['NoiDi']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="destination">
                                <label class="final_point">
                                    <div class="arrive">Đến</div>
                                </label>
                                <div class="place">
                                    <select name="plane" id="plane" style="width:200px">
                                        <?php foreach ($list1 as $row): ?>
                                            <option value="<?php echo $row['NoiDen']; ?>"><?php echo $row['NoiDen']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="day">
                            <label class="departure_day">
                                <div class="departure_date">Ngày đi</div>
                            </label>
                            <div class="date">
                                <input type="date" value="2023-06-01" style="width:200px" />
                            </div>
                        </div>
                        <div class="seat_class">
                            <label class="categorize">
                                <div class="categorize">Hạng ghế</div>
                            </label>
                            <div class="bred">
                                <div class="bred">
                                    <select name="cars" id="cars" style="width:200px">
                                        <?php foreach ($list as $row): ?>
                                            <option value="<?php echo $row['TenHangVe']; ?>"><?php echo $row['TenHangVe']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <form action="index.php?option=timkiem/search" method="post" class="search_flight"
                            style="margin-top:5px">
                            <button class="btn" name="btn" type="submit"><i class="ti-search"></i>
                                Tìm chuyến bay</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="banner_img">
                <div id="left_ads_float">
                    <a href="#" target="_blank"><img src="public/banner/banner1.jpg"
                            style="width:300px; height:350px" /></a>
                </div>
                <div id="left_ads_float">
                    <a href="#" target="_blank"><img src="public/banner/banner2.png"
                            style="width:300px; height:350px" /></a>
                </div>
            </div>
        </div>

        <?php foreach ($list2 as $row): ?>
            <div class="ticket_information" style="float:right">
                <div class="information_tc">
                    <div class="img_flight"><img src="public/images/<?php echo $row['img'] ?>" alt="VietJet Air"></div>
                    <div class="name_flight" style="color:blue">
                        <?php echo $row['TenMayBay'] ?>
                    </div>
                </div>

                <div class="time_flights">Giờ đi:
                    <?php echo $row['GioDi'] ?>
                </div>
                <div class="time_end">Giờ đến:
                    <?php echo $row['GioDen'] ?>
                </div>
                <div class="location_start">Điểm đi:
                    <?php echo $row['DiemDi'] ?>
                </div>
                <div class="location_end">Điểm đến:
                    <?php echo $row['DiemDen'] ?>
                </div>
                <div class="date_start">Ngày bay:
                    <?php echo $row['NgayBay'] ?>
                </div>
                <div class="seat_class1">Hạng ghế:
                    <?php echo $row['HangGhe'] ?>
                </div>
                <div class="price" style="position: relative;bottom:15px;right:15px">
                    <div class="money" style="text-align:center;color:red">
                        <?php echo $row['GiaTien'] ?>/Khách
                    </div>
                    <div class="select"><a
                            href="index.php?option=slve/so-luong-ve&MaCTVe=<?php echo $row['MaCTVe'] ?>"><button
                                class="click">Chọn</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<!--end content -->

<div class="Banner">
    <div class="container">
        <div class="news_information">
            <div class="news">
                Tin tức
            </div>
            <?php foreach ($list3 as $row): ?>
                <div class="hot_news">
                    <div class="img_news">
                        <img src="public/banner/<?php echo $row['img'] ?>" alt="img">
                        <div class="post">
                            <h5 class="post-title is-large">
                                <a href="<?php echo $row['link'] ?>&<?php echo $row['Id'] ?>" style="text-decoration: none">
                                    <?php echo $row['Title'] ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="baggage_regulations">
            <div class="regulations">
                Quy định-Hành lý
            </div>
            <?php foreach ($list4 as $row): ?>
                <div class="news_inf">
                    <div class="img_news">
                        <img src="public/banner/<?php echo $row['img'] ?>" alt="img">
                        <div class="post">
                            <h5 class="post-title is-large ">
                                <a href="<?php echo $row['link'] ?>&<?php echo $row['Id'] ?>" style="text-decoration: none">
                                    <?php echo $row['Title'] ?>
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="banner">
            <video controls style="margin-left:70px;width:400px;height:400px">
                <source src="public/video/Vietjet.mp4">
            </video>
        </div>
    </div>
</div>

<!--end sidebar -->
<?php require_once('views/frontend/footer.php'); ?>