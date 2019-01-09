<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Chỉnh sửa danh mục có mã <?php echo $id ?></h2>
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
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $info->c_name ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="parent">Cấp cha</label>
						<div class="controls">
							<select id="parent" name="parent" data-rel="chosen">
								<option value="0" <?php echo $info->c_parent == 0 ? "selected" : "" ?>>Cấp cao nhất</option>
								<?php foreach ($parent as $key => $value) {
									echo "<option value='".$value->c_id."'";
									if ($info->c_parent == $value->c_id) {
										echo "selected";
									}
									echo ">".$value->c_name."</option>";
									} ?>
							</select><br /><br />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="position">Vị trí</label>
						<div class="controls">
							<input class="input-xlarge focused" id="position" name="position" type="number" value="<?php echo $info->c_position ?>"><br /><br />
							<?php echo $this->session->flashdata('dup'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="view">Kiểu hiển thị</label>
						<div class="controls">
							<select id="view" name="view" data-rel="chosen">
								<option value="menu" <?php echo $info->c_view == "menu" ? "selected" : "" ?>>Thực đơn</option>
								<option value="category" <?php echo $info->c_view == "category" ? "selected" : "" ?>>Danh mục</option>
								<option value="footer" <?php echo $info->c_view == "footer" ? "selected" : "" ?>>Chân trang</option>
							</select><br /><br />
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="link">Liên kết</label>
						<div class="controls">
							<input class="input-xlarge focused" id="link" name="link" type="text" value="<?php echo $info->c_link ?>"><br /><br />
							<?php echo form_error('link'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Trạng thái</label>
						<div class="controls">
							<label class="checkbox inline">
								<input type="checkbox" id="status" name="status" value="1" <?php echo $info->c_status == 1 ? 'checked' : '' ?>>Hiện
							</label>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/category') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>