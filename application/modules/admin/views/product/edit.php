<?php
// BƯỚC 2: HÀM ĐỆ QUY HIỂN THỊ CATEGORIES
function showCategories($categories, $parent = 0)
{
    foreach ($categories as $key => $item)
    {
        // Nếu là chuyên mục con thì hiển thị
        if ($item->c_parent == $parent)
        {
        	if ($item->c_parent == 0) {
        		echo '<option value=""></option>';
        		echo '<optgroup label="'.$item->c_name.'">';
        	} else {
        		echo '<option value="'.$item->c_id.'">'.$item->c_name.'</option>';
        	}

            // Xóa chuyên mục đã lặp
            unset($categories[$key]);

            // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
            showCategories($categories, $item->c_id);
            if ($item->c_parent == 0) {
            	echo '</optgroup>';
            }
        }
    }
} ?>
<div class="row-fluid sortable ui-sortable">
	<div class="box span12">
		<div class="box-header" data-original-title="">
			<h2><i class="halflings-icon white star-empty"></i><span class="break"></span>Sửa sản phẩm có mã <?php echo $id ?></h2>
			<div class="box-icon">
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
				<fieldset>
					<div class="control-group">
						<label class="control-label" for="name">Tên</label>
						<div class="controls">
							<input class="input-xlarge focused" id="name" name="name" type="text" value="<?php echo $info->p_name ?>"><br /><br />
							<?php echo form_error('name'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="image">Ảnh đại diện</label>
						<div class="controls">
							<input class="input-file uniform_on" id="image" name="image" type="file">
							<?php echo form_error('image'); ?>
						</div>
						<img class="img-responsive" style="width: 300px; margin: 20px 0px;" src="<?php echo base_url()."upload/".$info->p_image ?>" alt="">
					</div>
					<?php $img = json_decode($info->p_imagelist)?>
					<div class="control-group">
						<label class="control-label" for="image_1">Ảnh thu nhỏ 1</label>
						<div class="controls">
							<input class="input-file uniform_on" id="image_1" name="image_1" type="file">
							<?php echo form_error('image_1'); ?>
						</div>
						<img class="img-responsive" style="width: 300px; margin: 20px 0px;" src="<?php echo base_url()."upload/".$img[0] ?>" alt="">
					</div>
					<div class="control-group">
						<label class="control-label" for="image_2">Ảnh thu nhỏ 2</label>
						<div class="controls">
							<input class="input-file uniform_on" id="image_2" name="image_2" type="file">
							<?php echo form_error('image_2'); ?>
						</div>
						<img class="img-responsive" style="width: 300px; margin: 20px 0px;" src="<?php echo base_url()."upload/".$img[1] ?>" alt="">
					</div>
					<div class="control-group">
						<label class="control-label" for="category">Danh mục</label>
						<div class="controls">
							<select id="category" name="category" data-rel="chosen" data-placeholder="<?php echo $cat[0]->c_name ?>">
								<!-- <?php foreach($category as $key => $value) : ?>
									<option value="<?php echo $value->c_id ?>" <?php echo ($info->c_id == $value->c_id) ? "selected" : "" ?>><?php echo $value->c_name ?></option>
								<?php endforeach ?> -->
								<?php showCategories($category); ?>
							</select>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="price">Giá gốc</label>
						<div class="controls">
							<input class="input-xlarge focused" id="price" name="price" type="number" value="<?php echo $info->p_price ?>" step="0.01"><br /><br />
							<?php echo form_error('price'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="discount">Giảm giá (%)</label>
						<div class="controls">
							<input class="input-xlarge focused" id="discount" name="discount" type="number" value="<?php echo $info->p_discount ?>"><br /><br />
							<?php echo form_error('discount'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="detail">Mô tả</label>
						<div class="controls">
							<textarea class="cleditor" id="detail" name="detail" rows="3"><?php echo $info->p_detail ?></textarea><br /><br />
							<?php echo form_error('detail'); ?>
						</div>
					</div>
					<div class="control-group hidden-phone">
						<label class="control-label" for="review">Đánh giá</label>
						<div class="controls">
							<textarea class="cleditor" id="review" name="review" rows="3"><?php echo $info->p_review ?></textarea><br /><br />
							<?php echo form_error('review'); ?>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label">Trạng thái</label>
						<div class="controls">
							<label class="checkbox inline">
								<input type="checkbox" id="status" name="status" value="1" <?php echo $info->p_status == 1 ? 'checked' : '' ?>>Hiện
							</label>
						</div>
					</div>
					<div class="form-actions">
						<button type="submit" class="btn btn-primary">Cập nhật</button>
						<button type="reset" class="btn" onclick="window.location.href = '<?php echo base_url('admin/product') ?>'">Hủy</button>
					</div>
				</fieldset>
			</form>
		</div>
	</div><!--/span-->
</div>