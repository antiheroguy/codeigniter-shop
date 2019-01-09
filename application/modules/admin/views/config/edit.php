<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white cog"></i><span class="break"></span>Chỉnh sửa cấu hình website</h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="logo">Logo</label>
						<div class="controls">
							<input class="input-file uniform_on" id="logo" name="logo" type="file">
							<?php echo form_error('logo'); ?>
						</div>
						<img class="img-responsive" style="width: 300px; margin: 20px 0px;" src="<?php echo base_url()."site/images/".$info->cf_logo ?>" alt="">
					</div>
					<div class="control-group">
						<label class="control-label" for="title">Tiêu đề</label>
						<div class="controls">
							<input class="input-xlarge focused" id="title" name="title" type="text" value="<?php echo $info->cf_title ?>"><br /><br />
							<?php echo form_error('title'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="footer">Chân trang</label>
						<div class="controls">
							<textarea class="cleditor" id="footer" name="footer" rows="3"><?php echo $info->cf_footer ?></textarea><br /><br />
							<?php echo form_error('footer'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="advert">Ảnh quảng cáo</label>
						<div class="controls">
							<input class="input-file uniform_on" id="advert" name="advert" type="file">
							<?php echo form_error('advert'); ?>
						</div>
						<img class="img-responsive" style="width: 300px; margin: 20px 0px;" src="<?php echo base_url()."site/images/".$info->cf_advert ?>" alt="">
					</div>
					<div class="control-group">
						<label class="control-label" for="adlink">Link quảng cáo</label>
						<div class="controls">
							<input class="input-xlarge focused" id="adlink" name="adlink" type="text" value="<?php echo $info->cf_adlink ?>"><br /><br />
							<?php echo form_error('adlink'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="hotline">Hotline</label>
						<div class="controls">
							<input class="input-xlarge focused" id="hotline" name="hotline" type="text" value="<?php echo $info->cf_hotline ?>"><br /><br />
							<?php echo form_error('hotline'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="facebook">Facebook</label>
						<div class="controls">
							<input class="input-xlarge focused" id="facebook" name="facebook" type="text" value="<?php echo $info->cf_facebook ?>"><br /><br />
							<?php echo form_error('facebook'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="twitter">Twitter</label>
						<div class="controls">
							<input class="input-xlarge focused" id="twitter" name="twitter" type="text" value="<?php echo $info->cf_twitter ?>"><br /><br />
							<?php echo form_error('twitter'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="google">Google</label>
						<div class="controls">
							<input class="input-xlarge focused" id="google" name="google" type="text" value="<?php echo $info->cf_google ?>"><br /><br />
							<?php echo form_error('google'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="instagram">Instagram</label>
						<div class="controls">
							<input class="input-xlarge focused" id="instagram" name="instagram" type="text" value="<?php echo $info->cf_instagram ?>"><br /><br />
							<?php echo form_error('instagram'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="phone">Số điện thoại</label>
						<div class="controls">
							<input class="input-xlarge focused" id="phone" name="phone" type="text" value="<?php echo $info->cf_phone ?>"><br /><br />
							<?php echo form_error('phone'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="mail">Email</label>
						<div class="controls">
							<input class="input-xlarge focused" id="mail" name="mail" type="email" value="<?php echo $info->cf_email ?>"><br /><br />
							<?php echo form_error('mail'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="about">Giới thiệu</label>
						<div class="controls">
							<textarea class="cleditor" id="about" name="about" rows="3"><?php echo $info->cf_about ?></textarea><br /><br />
							<?php echo form_error('about'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="address">Địa chỉ</label>
						<div class="controls">
							<input class="input-xlarge focused" id="address" name="address" type="text" value="<?php echo $info->cf_address ?>"><br /><br />
							<?php echo form_error('address'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="payment">Phương thức thanh toán</label>
						<div class="controls">
							<textarea class="cleditor" id="payment" name="payment" rows="3"><?php echo $info->cf_payment ?></textarea><br /><br />
							<?php echo form_error('payment'); ?>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/config') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>