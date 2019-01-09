<div class="register">
<?php if(!empty($message)) {
				echo "<div class='alert alert-info'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>".$message."</strong>
			</div>";
				} ?>
	<form action="<?php echo base_url('register') ?>" method="POST">
		<div class="register-top-grid">
			<h3>Đăng ký tài khoản</h3>
			<div>
				<span>Tên<label>*</label></span>
				<input type="text" name="name" id="name" value="<?php echo set_value('name') ?>">
				<?php echo form_error('name'); ?>
			</div>
			<div>
				<span>Email<label>*</label></span>
				<input type="email" name="mail" id="mail" value="<?php echo set_value('mail') ?>">
				<?php echo form_error('mail'); ?>
			</div>
			<div>
				<span>Mật khẩu<label>*</label></span>
				<input type="password" name="password" id="password">
				<?php echo form_error('password'); ?>
			</div>
			<div>
				<span>Nhập lại mật khẩu<label>*</label></span>
				<input type="password" name="repassword" id="repassword">
				<?php echo form_error('repassword'); ?>
			</div>
			<div>
				<span>Số điện thoại<label>*</label></span>
				<input type="text" name="phone" id="phone" value="<?php echo set_value('phone') ?>">
				<?php echo form_error('phone'); ?>
			</div>
			<div>
				<span>Địa chỉ<label>*</label></span>
				<input type="text" name="address" id="address" value="<?php echo set_value('address') ?>">
				<?php echo form_error('address'); ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
		<div class="register-but">
			<input type="submit" value="Đăng ký" name="submit">
			<div class="clearfix"> </div>
		</div>
	</form>
</div>