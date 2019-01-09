<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Chỉnh sửa thông tin</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="Post" action="">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tên đầy đủ</label>
						<div class="controls">
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $info->a_name ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="username">Tên người dùng</label>
						<div class="controls">
							<input class="input-xlarge focused" id="username" name="username" type="text" value="<?php echo $info->a_username ?>"><br /><br />
							<?php echo form_error('username'); ?>
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