<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Chỉnh sửa người dùng có mã <?php echo $id; ?></h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<div class='alert alert-info'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>Bỏ trống trường mật khẩu nếu không muốn thay đổi mật khẩu</strong>
			</div>
			<form class="form-horizontal" method="Post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tên</label>
						<div class="controls">
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $info->u_name ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="mail">Email</label>
						<div class="controls">
							<input class="input-xlarge focused" id="mail" name="mail" type="email" value="<?php echo $info->u_email ?>"><br /><br />
							<?php echo form_error('mail'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input class="input-xlarge focused" id="password" name="password" type="password"><br /><br />
							<?php echo form_error('password'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="repassword">Re-Password</label>
						<div class="controls">
							<input class="input-xlarge focused" id="repassword" name="repassword" type="password"><br /><br />
							<?php echo form_error('repassword'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">Số điện thoại</label>
						<div class="controls">
							<input class="input-xlarge focused" id="phone" name="phone" type="text" value="<?php echo $info->u_phone ?>"><br /><br />
							<?php echo form_error('phone'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="address">Địa chỉ</label>
						<div class="controls">
							<input class="input-xlarge focused" id="address" name="address" type="text" value="<?php echo $info->u_address ?>"><br /><br />
							<?php echo form_error('address'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Trạng thái</label>
						<div class="controls">
							<label class="checkbox inline">
								<input type="checkbox" id="status" name="status" value="1" <?php echo $info->u_status == 1 ? 'checked' : '' ?>>Hiện
							</label>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/user') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>