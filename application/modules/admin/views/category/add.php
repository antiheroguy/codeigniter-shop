<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Thêm danh mục</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tên</label>
						<div class="controls">
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo set_value('name') ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="parent">Cấp cha</label>
						<div class="controls">
							<select id="parent" name="parent" data-rel="chosen">
								<option value="0">Cấp cao nhất</option>
								<?php foreach ($parent as $key => $value) {
									echo "<option value='".$value->c_id."'>".$value->c_name."</option>";
									} ?>
							</select><br /><br />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="position">Vị trí</label>
						<div class="controls">
							<input class="input-xlarge focused" id="position" name="position" type="number" value="<?php echo set_value('position') ?>"><br /><br />
							<?php echo $this->session->flashdata('dup'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="view">Kiểu hiển thị</label>
						<div class="controls">
							<select id="view" name="view" data-rel="chosen">
								<option value="menu">Thực đơn</option>
								<option value="category">Danh mục</option>
								<option value="footer">Chân trang</option>
							</select><br /><br />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="link">Liên kết</label>
						<div class="controls">
							<input class="input-xlarge focused" id="link" name="link" type="text" value="<?php echo set_value('link') ?>"><br /><br />
							<?php echo form_error('link'); ?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/category') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>