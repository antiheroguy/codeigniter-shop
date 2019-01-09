<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Thêm người dùng</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="Post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tên</label>
						<div class="controls">
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo set_value('name') ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="mail">Email</label>
						<div class="controls">
							<input class="input-xlarge focused" id="mail" name="mail" type="email" value="<?php echo set_value('mail') ?>"><br /><br />
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
							<input class="input-xlarge focused" id="phone" name="phone" type="text" value="<?php echo set_value('phone') ?>"><br /><br />
							<?php echo form_error('phone'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="address">Địa chỉ</label>
						<div class="controls">
							<input class="input-xlarge focused" id="address" name="address" type="text" value="<?php echo set_value('address') ?>"><br /><br />
							<?php echo form_error('address'); ?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/user') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>