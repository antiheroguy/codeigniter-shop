 <div class="register">
 <?php if(!empty($message)) {
				echo "<div class='alert alert-info'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>".$message."</strong>
			</div>";
				} ?>
 	<div class="col-md-6 login-left">
 		<h3>Đăng ký</h3>
 		<p>Bạn chưa có tài khoản?</p>
 		<a class="acount-btn" href="<?php echo base_url('register') ?>">Tạo tài khoản mới</a>
 	</div>
 	<div class="col-md-6 login-right">
 		<h3>Đăng nhập</h3>
 		<form action="<?php echo base_url('login') ?>" method="POST">
 			<div>
 				<span>Email<label>*</label></span>
 				<input type="email" id="mail" name="mail" value="<?php echo set_value('mail') ?>">
 				<?php echo form_error('mail'); ?>
 			</div>
 			<div>
 				<span>Mật khẩu<label>*</label></span>
 				<input type="password" id="password" name="password">
 				<?php echo form_error('password'); ?>
 			</div>
 			<input type="submit" value="Đăng nhập">
 		</form>
 	</div>
 	<div class="clearfix"> </div>
 </div>