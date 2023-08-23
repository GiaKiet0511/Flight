<?php
session_start();
require_once("./vendor/autoload.php");
?>
<?php require_once('views/frontend/header.php'); ?>
<div class="content" style="height:500px">
	<div class="container">
		<div class="col-md-3" style="float:left">
			<h3>Thông tin liên hệ</h3>
			<p class="p-bottom">Website bán vé máy bay Wings là đơn vị chủ quản, chịu trách nhiệm và
				thực hiện các giao dịch liên quan quá trình mua và đặt vé.Hỗ trợ khách hàng nhanh chóng nhất.</p>
			<div class="contact-box">
				<p class="add"><strong>Địa chỉ: </strong>Khu phố 2, Hiệp Bình Chánh, TP Thủ Đức</p>
				<p class="phone"><strong>Điện thoại: </strong><a href="tel:19002549" title="19002549">19002549</a></p>
				<p class="mail"><strong>Email: </strong><a href="#" title="nguyenky0049@gmail.com">nguyenky0049@gmail.com</a></p>
			</div>

		</div>
		<div class="col-md-7" style="float:right">
			<form action="index.php?option=email/email" method="post" id="contact" accept-charset="UTF-8"
				class="has-validation-callback"><input name="FormType" type="hidden" value="contact"><input name="utf8"
					type="hidden" value="true"><input type="hidden">

				<div class="row">
					<div class="col-sm-6 col-xs-12" style="padding-left: 10px; padding-right: 10px;">
						<div class="form-group">
							<label>Họ và tên<span class="required">*</span></label>
							<input placeholder="Nhập họ và tên" type="text" name="name" id="name"
								class="form-control  form-control-lg" data-validation-error-msg="Không được để trống"
								data-validation="required" required="">
						</div>
					</div>
					<div class="col-sm-6 col-xs-12">
						<div class="form-group">
							<label>Email<span class="required">*</span></label>
							<input placeholder="Nhập địa chỉ Email muốn gửi" type="email" name="email"
								data-validation="email" data-validation-error-msg="Email sai định dạng" id="email"
								class="form-control form-control-lg" required="">
						</div>
					</div>
					<div class="col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Điện thoại<span class="required">*</span></label>
							<input placeholder="Nhập số điện thoại" type="tel" name="phone"
								data-validation-error-msg="Không được để trống" data-validation="required" id="tel"
								class="number-phone form-control form-control-lg" required="">
						</div>
					</div>
					<div class="col-sm-12 col-xs-12">
						<label>Nội dung<span class="required">*</span></label>
						<textarea placeholder="Nội dung liên hệ" name="body" id="comment"
							class="form-control form-control-lg error" rows="5"
							data-validation-error-msg="Không được để trống" data-validation="required"
							required=""></textarea>
						<div class="form-group" style="padding-top:10px">
							<button name="submit" type="submit" class="btn btn-blues btn-style btn-style-active"
								style="border:1px solid #D3D3D3">Gửi tin nhắn</button>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php require_once('views/frontend/footer.php'); ?>