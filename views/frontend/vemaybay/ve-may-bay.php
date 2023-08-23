<?php
use App\Models\Ticketclass;

$ticketclass = new Ticketclass(); //Tạo đối tượng
$list = $ticketclass->ticketclass_list();

use App\Models\Flightroute;

$flightroute = new Flightroute(); //Tạo đối tượng
$list1 = $flightroute->flightroute_list();
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails(); //Tạo đối tượng
$list2 = $ticketdetails->ticketdetails_list();
?>
<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content">
    <div class="container">
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
                                    <?php foreach ($list1 as $row1): ?>
                                        <option value="<?php echo $row1['NoiDi']; ?>"><?php echo $row1['NoiDi']; ?>
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
                                    <?php foreach ($list1 as $row1): ?>
                                        <option value="<?php echo $row1['NoiDen']; ?>"><?php echo $row1['NoiDen']; ?>
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
        <div id="left_ads_float" style="bottom:24px; left: 80px; position:absolute; top:550px">
            <a href="#" target="_blank"><img src="public/banner/banner1.jpg" style="width:300px; height:350px" /></a>
        </div>
        <div id="left_ads_float" style="bottom:24px; left: 80px; position:absolute; top:900px">
            <a href="#" target="_blank"><img src="public/banner/banner2.png" style="width:300px; height:350px" /></a>
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
                    <div class="select"><a href="index.php?option=slve/so-luong-ve&MaCTVe=<?php echo $row['MaCTVe']?>"><button
                                class="click">Chọn</button></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>