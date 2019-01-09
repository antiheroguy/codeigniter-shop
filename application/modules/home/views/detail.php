<h4 class="head">Sản phẩm <span class="m_2"><?php echo $header ?></span></h4>
<div class="top_grid2">
	<?php
	if(!$product) {
		echo "<h4 class='head'>Không có sản phẩm</h4>";
	} else {
		$i = 0 ?>
		<?php foreach ($product as $key => $value): ?>
			<?php $i += 1;
			if ($i % 3 == 1 && $i != 1) {
				echo "</div><div class='top_grid2'>";
			}
			?>
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
								<a href="<?php echo base_url()."home/cart/add/".$value->p_id ?>"><div class="btn btn-primary btn-normal btn-inline " target="_self" title="Mua">Mua</div></a>
							</li>
							<div class="clearfix"></div>
						</ul>
					</div>
				</div>
				<?php if ($value->p_discount != 0): ?>
					<div class='discount'><span><?php echo "-".$value->p_discount." %" ?></span></div>
				<?php endif ?>
			</div>
			<?php if ($i % 3 == 0) {
				echo "<div class='clearfix'></div>";
			}
			?>
		<?php endforeach ?>
		<?php } ?>
	</div>
	<div class="clearfix"></div>
	<div class="page" style="float: right">
		<?php echo $this->pagination->create_links() ?>
	</div>
	<div class="clearfix"></div>