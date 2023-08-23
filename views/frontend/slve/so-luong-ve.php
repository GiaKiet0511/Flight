<?php
use App\Models\Ticketdetails;

$ticketdetails = new Ticketdetails();
$MaCTVe = $_REQUEST['MaCTVe'];
$row = $ticketdetails->ticketdetails_row($MaCTVe);
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="slider">
    <div class="container" style="padding:20px">
        <form action="index.php?option=slve/process" enctype="multipart/form-data" method="post">
            <div id="frm_detail_1" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Họ tên
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="text" name="HoTen" value="" placeholder="Thông tin"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Họ tên is invalid">
            </div>
            <div id="frm_detail_1" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Nơi đi
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="text" name="DiemDi" value="<?php echo $row['DiemDi']; ?>" placeholder="Địa điểm"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Nơi đi is invalid">
            </div>
            <div id="frm_detail_2" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Nơi đến
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="text" name="DiemDen" value="<?php echo $row['DiemDen']; ?>" placeholder="Địa điểm"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Nơi đến is invalid">
            </div>
            <div id="frm_detail_3" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Giờ đi
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="time" value="<?php echo $row['GioDi']; ?>" id="detail" name="GioDi" maxlength="10"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Giờ đi is invalid"
                    class="frm_date" aria-invalid="false">
            </div>
            <div id="frm_detail_4" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Giờ đến
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="time" value="<?php echo $row['GioDen']; ?>" id="detail" name="GioDen" maxlength="10"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Giờ đến is invalid"
                    class="frm_date" aria-invalid="false">
            </div>
            <div id="frm_detail_5" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Ngày đi
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="date" value="<?php echo $row['NgayBay']; ?>" id="detail" name="NgayBay" maxlength="10"
                    data-reqmsg="This detail cannot be blank." aria-required="true"
                    data-invmsg="Ngày nhận vé is invalid" class="frm_date" aria-invalid="false">
            </div>
            <div id="frm_detail_6" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Hạng ghế
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <select name="HangGhe" id="HangGhe" style="margin-bottom: 15px">
                    <option name="HangGhe" value="Phổ thông">Phổ thông</option>
                    <option name="HangGhe" value="Thương gia">Thương gia</option>
                </select>
            </div>
            <div id="frm_detail_7" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Số lượng vé
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="number" id="detail_ap2lbv2" name="slve" value="1"
                    data-reqmsg="This detail cannot be blank." aria-required="true" data-invmsg="Số lượng vé is invalid"
                    aria-invalid="false" min="1" max="50" step="1">
            </div>
            <div id="frm_detail_12" class="frm_form_detail" style="margin-bottom: 15px">
                <label class="frm_primary_label">Email
                    <span class="frm_required" style="color:red">*</span>
                </label>
                <input type="tel" id="detail" name="email" value="" data-invmsg="Email is invalid" aria-invalid="false">
            </div>
            <input name="GiaTien" value="<?php echo $row['GiaTien']; ?>" hidden>
            <div class="frm_submit">
                <a href="index.php?option=slve/process">
                    <button class="frm_button_submit frm_final_submit" name="submit" type="submit"
                        style="background:#3300FF; border-color: #3300FF;color: #fff;"
                        formnovalidate="formnovalidate">Đặt
                        vé
                        máy bay</button>
                </a>
            </div>
        </form>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>