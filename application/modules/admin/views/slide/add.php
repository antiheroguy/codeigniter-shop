<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white picture"></i><span class="break"></span>Thêm ảnh</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tiêu đề</label>
						<div class="controls">
							<input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo set_value('title') ?>"><br /><br />
							<?php echo form_error('title'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="image">Ảnh</label>
						<div class="controls">
							<input class="input-file uniform_on" id="image" name="image" type="file"><br /><br />
							<?php echo form_error('image'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="link">Mô tả</label>
						<div class="controls">
							<textarea class="cleditor" id="link" name="link" rows="3"><?php echo set_value('link') ?></textarea><br /><br />
							<?php echo form_error('link'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="position">Vị trí</label>
						<div class="controls">
							<input class="input-xlarge focused" id="position" name="position" type="number" value="<?php echo set_value('position') ?>"><br /><br />
							<?php echo $this->session->flashdata('dup'); ?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Thêm mới</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/slide') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>