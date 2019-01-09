<div class="register">
<?php if(!empty($message)) {
				echo "<div class='alert alert-info'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>".$message."</strong>
			</div>";
				} ?>
	<form action="" method="POST">
		<div class="register-top-grid">
			<h3>Thông tin người mua</h3>
			<div>
				<span>Tên<label>*</label></span>
				<input type="text" name="name" id="name" value="<?php echo (!empty($info)) ? $info->u_name : "" ?>">
				<?php echo form_error('name'); ?>
			</div>
			<div>
				<span>Email<label>*</label></span>
				<input type="email" name="mail" id="mail" value="<?php echo (!empty($info)) ? $info->u_email : "" ?>">
				<?php echo form_error('mail'); ?>
			</div>
			<div>
				<span>Số điện thoại<label>*</label></span>
				<input type="text" name="phone" id="phone" value="<?php echo (!empty($info)) ? $info->u_phone : "" ?>">
				<?php echo form_error('phone'); ?>
			</div>
			<div>
				<span>Địa chỉ<label>*</label></span>
				<input type="text" name="address" id="address" value="<?php echo (!empty($info)) ? $info->u_address : "" ?>">
				<?php echo form_error('address'); ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
		<div>
				<span>Nội dung</span>
				<textarea name="content" id="content" style="display: block; width: 95%"></textarea>
				<?php echo form_error('content'); ?>
			</div>
		<div class="register-but">
			<h4>Tổng số tiền : <span style="color: #f00"><?php echo $amount ?></span></h4>
			<input type="submit" value="Đặt hàng" name="submit">
			<div class="clearfix"> </div>
		</div>
	</form>
</div>