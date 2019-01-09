<?php $img = json_decode($info->p_imagelist) ?>
<div class="single_right">
	<div class="single_top">
		<div class="single_grid">
			<div class="grid images_3_of_2">
				<ul id="etalage">
					<li>
						<a href="optionallink.html">
							<img class="etalage_thumb_image" src="<?php echo base_url()."upload/".$info->p_image ?>" class="img-responsive" />
							<img class="etalage_source_image" src="<?php echo base_url()."upload/".$info->p_image ?>" class="img-responsive" title="" />
						</a>
					</li>
					<?php foreach ($img as $key => $value): ?>
						<li>
							<img class="etalage_thumb_image" src="<?php echo base_url()."upload/$value" ?>" class="img-responsive" />
							<img class="etalage_source_image" src="<?php echo base_url()."upload/$value" ?>" class="img-responsive" title="<?php $info->p_name ?>" />
						</li>
					<?php endforeach ?>
				</ul>
				<div class="clearfix"></div>
			</div>
			<div class="desc1 span_3_of_2">
				<h1> <?php echo $info->p_name ?></h1>
				<p class="availability">Danh mục : <a href="<?php echo base_url().'category/'.$info->c_id ?>"><?php echo $info->category->c_name ?></a></p>
				<div class="price_single">
					<?php if ($info->p_discount != 0) : ?>
						<?php $current_price = round($info->p_price); ?>
						<span class="reducedfrom"><?php echo $current_price." VND"; ?></span>
					<?php endif; ?>
					<span class="actual">
						<?php if ($info->p_discount != 0) {
							$current_price = round(($info->p_price * (100 - $info->p_discount))/100);
							echo $current_price." VND";
						} else {
							echo round($info->p_price)." VND";
						}
						?>
					</span>
				</div>
				<h2 class="quick">Mô tả sản phẩm</h2>
				<p class="quick_desc"><?php echo $info->p_detail ?></p>
				<a href="<?php echo base_url()."home/cart/add/".$info->p_id ?>" title="Thêm vào giỏ hàng" class="btn bt1 btn-primary btn-normal btn-inline " target="_self">Mua</a>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"></div>
	</div>
	<div class="sap_tabs">
		<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
			<ul class="resp-tabs-list">
				<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Đánh giá</span></li>
				<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>Phương thức thanh toán</span></li>
				<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>Phản hồi</span></li>
				<div class="clear"></div>
			</ul>
			<div class="resp-tabs-container">
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
					<div class="facts">
						<ul class="tab_list">
							<li><?php echo $info->p_detail ?></li>
						</ul>
					</div>
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
					<div class="facts">
						<ul class="tab_list">
							<li><?php echo $payment ?></li>
						</ul>
					</div>
				</div>
				<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
					<ul class="tab_list">
						<li>
							<div class="contact-form">
								<form method="post" action="<?php echo base_url('feedback') ?>">
									<?php if (!$this->session->has_userdata('user')): ?>
										<p class="comment-form-author"><label for="name">Họ Tên</label>
											<input type="text" class="textbox" id="name" name="name">
										</p>
										<p class="comment-form-author"><label for="mail">Email:</label>
											<input type="text" class="textbox" id="mail" name="mail">
										</p>
									<?php endif ?>
									<p class="comment-form-author"><label for="content">Nội dung</label>
										<textarea id="content" name="content"></textarea>
									</p>
									<input name="submit" type="submit" id="submit" value="Gửi">
								</form>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<?php if (!empty($product)): ?>
		<h3 class="single_head">Sản phẩm tương tự</h3>
		<div class="related_products">
			<?php foreach ($product as $key => $value): ?>
				<div class="col-md-4 top_grid1-box1">
					<div class="grid_1 thumbnail">
						<a href="<?php echo base_url()."product/".$value->p_id ?>">
							<div class="b-link-stroke b-animate-go thickbox">
								<div class="b-bottom-line"></div>
								<div class="b-top-line"></div>
								<img src="<?php echo base_url()."upload/".$value->p_image ?>" class="img-responsive" alt="">
							</div>
						</a>
						<div class="grid_2">
							<p><?php echo $value->p_name ?></p>
							<ul class="grid_2-bottom">
								<li class="grid_2-left">
									<p><?php echo ($value->p_discount != 0) ? round(($value->p_price * (100 - $value->p_discount))/100)/1000 : $value->p_price/1000?> K</p>
								</li>
								<li class="grid_2-right">
									<a href="<?php echo base_url()."cart/add/".$value->p_id ?>"><div class="btn btn-primary btn-normal btn-inline " target="" title="Mua">Mua</div></a>
								</li>
								<div class="clearfix"></div>
							</ul>
						</div>
					</div>
					<?php if ($value->p_discount != 0): ?>
					<div class='discount'><span><?php echo "-".$value->p_discount." %" ?></span></div>
				<?php endif ?>
				</div>
			<?php endforeach ?>
			<div class="clearfix"> </div>
		</div>
	<?php endif ?>
</div>