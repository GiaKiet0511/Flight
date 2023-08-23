<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content">
    <div class="container">
        <div class="frm_forms  with_frm_style frm_style_formidable-style" id="frm_form_25_container">
            <form action="index.php?option=datve/process" enctype="multipart/form-data" method="post"
                class="frm-show-form">
                <div class="form_details">
                    <div class="frm_details_ticket" style="float:left">
                        <div id="frm_detail" class="form-detail" style="margin-bottom: 15px">
                            <span style="color:#0344B9; font-weight:bold; font-size:16px;">Thông tin đặt vé máy
                                bay</span>
                        </div>
                        <div id="frm_detail_1" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Nơi đến
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <input type="text" name="noiden" value="" placeholder="Địa điểm"
                                data-reqmsg="This detail cannot be blank." aria-required="true"
                                data-invmsg="Nơi đến is invalid">
                        </div>
                        <div id="frm_detail_2" class="frm_form_detail" style="margin-bottom: 15px">
                            <label for="detail" class="frm_primary_label">Loại vé
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <div class="frm_opt_container">
                                <div class="frm_radio" id="frm_radio_1"><label for="detail-0"> <input type="radio"
                                            name="loaive" id="detail-0" value="Một chiều"
                                            data-reqmsg="This detail cannot be blank." aria-required="true"
                                            data-invmsg="Loại vé is invalid" aria-invalid="false">
                                        Một chiều </label></div>
                                <div class="frm_radio" id="frm_radio-1"><label for="detail-1"> <input checked="true"
                                            type="radio" name="loaive" id="detail-1" value="Khứ hồi"
                                            data-reqmsg="This detail cannot be blank." aria-required="true"
                                            data-invmsg="Loại vé is invalid" aria-invalid="false">
                                        Khứ hồi </label>
                                </div>
                            </div>


                        </div>
                        <div id="frm_detail_7" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Số lượng vé
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <input type="number" id="detail_ap2lbv2" name="slve" value="1"
                                data-reqmsg="This detail cannot be blank." aria-required="true"
                                data-invmsg="Số lượng vé is invalid" aria-invalid="false" min="1" max="50" step="1">
                        </div>
                        <div id="frm_detail_4" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Ngày đi
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <input type="date" value="" id="detail" name="ngaydi" maxlength="10"
                                data-reqmsg="This detail cannot be blank." aria-required="true"
                                data-invmsg="Ngày nhận vé is invalid" class="frm_date" aria-invalid="false">


                        </div>
                        <div id="frm_detail_5" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Ngày về
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <input type="date" value="" id="detail" name="ngayve" maxlength="10"
                                data-reqmsg="This detail cannot be blank." aria-required="true"
                                data-invmsg="Ngày về is invalid" class="frm_date" aria-invalid="false">
                        </div>
                        <div id="frm_detail_6" class="frm_form_detail" style="margin-bottom: 15px">
                            <label for="detail_h" class="frm_primary_label">Hình thức thanh toán
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <div class="frm_opt_container" style="margin-bottom: 15px">
                                <div class="frm_radio" id="frm_radio_7"><label for="detail_h-0">
                                        <input type="radio" name="thanhtoan" id="detail_h-0" value="Tiền mặt"
                                            data-reqmsg="This detail cannot be blank." aria-required="true"
                                            data-invmsg="Hình thức thanh toán is invalid" aria-invalid="false"> Tiền
                                        mặt</label>
                                </div>
                            </div>
                        </div>
                        <input name="gia" value="3000000" hidden>
                    </div>
                    <div class="frm_details_customer" style="float:left;padding-left:200px">
                        <div id="frm_detail_8" class="frm_form_detail" style="margin-bottom: 15px">
                            <span style="color:#0344B9; font-weight:bold; font-size:16px;"> Thông tin khách
                                hàng</span>
                        </div>
                        <div id="frm_detail_9" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Họ tên
                                <span class="frm_required" style="color:red">*</span>
                            </label>
                            <input type="text" id="detail" name="hoten" data-reqmsg="This detail cannot be blank."
                                aria-required="true" data-invmsg="Họ tên is invalid" aria-invalid="false">


                        </div>
                        <div id="frm_detail_10" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Ngày, tháng, năm sinh
                                <span class="frm_required"></span>
                            </label>
                            <input type="date" id="detail" name="ngaysinh" value="2000-06-22"
                                style="width:270px !important" data-invmsg="Ngày, tháng, năm sinh is invalid"
                                class="auto_width" aria-invalid="false">
                        </div>
                        <div id="frm_detail_11" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Điện thoại
                                <span class="frm_required"></span>
                            </label>
                            <input type="tel" id="detail" name="dienthoai" value="" data-invmsg="Điện thoại is invalid"
                                aria-invalid="false">

                        </div>
                        <div id="frm_detail_12" class="frm_form_detail" style="margin-bottom: 15px">
                            <label class="frm_primary_label">Email
                                <span class="frm_required"></span>
                            </label>
                            <input type="tel" id="detail" name="email" value="" data-invmsg="Email is invalid"
                                aria-invalid="false">

                        </div>
                        <div id="frm_detail_13" class="frm_form_detail" style="margin-bottom: 15px">
                        Giá vé cố định mỗi lần đặt vé là: 3.000.000 VNĐ/Vé
                        </div>
                        <div id="frm_detail_13" class="frm_form_detail" style="margin-bottom: 15px">
                            Dấu
                            <span style="color:red">(*)</span> là thông tin bắt buộc để chúng tôi liên lạc và bảo vệ
                            quyền lợi cho Quý Khách.
                        </div>
                        <div class="frm_submit">
                            <button class="frm_button_submit frm_final_submit" name="submit" type="submit"
                                style="background:#3300FF; border-color: #3300FF;color: #fff;"
                                formnovalidate="formnovalidate">Đặt vé máy bay</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once('views/frontend/footer.php'); ?>