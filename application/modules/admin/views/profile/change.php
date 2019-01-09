<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Đổi mật khẩu</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="Post" action="">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="old">Mật khẩu cũ</label>
						<div class="controls">
							<input class="input-xlarge focused" id="old" name="old" type="password"><br /><br />
							<?php echo form_error('old'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Mật khẩu mới</label>
						<div class="controls">
							<input class="input-xlarge focused" id="password" name="password" type="password"><br /><br />
							<?php echo form_error('password'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="repassword">Nhập lại mật khẩu</label>
						<div class="controls">
							<input class="input-xlarge focused" id="repassword" name="repassword" type="password"><br /><br />
							<?php echo form_error('repassword'); ?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/profile') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>