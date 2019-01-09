<div class="singel_right">
	<div class="col-md-8">
		<div class="contact-form">
			<form method="post" action="<?php echo base_url('feedback') ?>">
				<?php if (!$this->session->has_userdata('user')): ?>
					<p class="comment-form-author"><label for="name">Họ Tên</label>
						<input type="text" class="textbox" id="name" name="name">
					</p>
					<p class="comment-form-author"><label for="mail">Email:</label>
						<input type="text" class="textbox" id="mail" name="mail">
					</p>
				<?php endif ?>
				<p class="comment-form-author"><label for="content">Nội dung</label>
					<textarea id="content" name="content"></textarea>
				</p>
				<input name="submit" type="submit" id="submit" value="Gửi">
			</form>
		</div>
	</div>
	<div class="col-md-4 contact_right">
		<h3>Thông tin liên hệ</h3>
		<div class="address">
			<i class="pin_icon"></i>
			<div class="contact_address">Địa chỉ : <?php echo $address ?></div>
			<div class="clearfix"></div>
		</div>
		<div class="address">
			<i class="phone"></i>
			<div class="contact_address">Điện thoại : <?php echo $phone ?></div>
			<div class="clearfix"></div>
		</div>
		<div class="address">
			<i class="phone"></i>
			<div class="contact_address">Đường dây nóng : <?php echo $hotline ?></div>
			<div class="clearfix"></div>
		</div>
		<div class="address">
			<i class="mail"></i>
			<div class="contact_email">Email : <a href="mailto:<?php echo $email ?>"> <?php echo $email ?></a></div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="clearfix"></div>
</div>