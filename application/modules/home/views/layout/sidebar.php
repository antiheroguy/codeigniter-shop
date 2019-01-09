<div class="search" style="padding: 10px 10px 20px 20px">
	<!-- <div class="stay" style="width: 40%">Tìm kiếm</div> -->
	<div class="stay_right" style="width: 90%">
		<form action="<?php echo base_url('home/product/search') ?>" method="get">
		<input type="text" style="width: 90%" placeholder="Tìm kiếm" name="search">
		<input type="submit" value="">
		</form>
	</div>
	<div class="clearfix"> </div>
</div>
<div class="clearfix"> </div>
<div class="sidebar">
<div class="menu_box">
	<h3 class="menu_head">Danh mục sản phẩm</h3>
	<ul class="menu">
		<?php foreach ($category as $key => $value) : ?>
			<li class="item"><a href=""><img class="arrow-img" src="<?php echo base_url()."site/"?>images/f_menu.png" alt=""> <?php echo $value->c_name ?></a>
				<ul class="cute" style="display: none;">
					<?php foreach ($value->sub as $key => $item) : ?>
						<li class="subitem"><a href="<?php echo base_url()."category/".$item->c_id ?>"><?php echo $item->c_name ?> </a></li>
					<?php endforeach ?>
				</ul>
			</li>
		<?php endforeach ?>
	</ul>
</div>
<!--initiate accordion-->
<script type="text/javascript">
	$(function() {
		var menu_ul = $('.menu > li > ul'),
		menu_a  = $('.menu > li > a');
		menu_ul.hide();
		menu_a.click(function(e) {
			e.preventDefault();
			if(!$(this).hasClass('active')) {
				menu_a.removeClass('active');
				menu_ul.filter(':visible').slideUp('normal');
				$(this).addClass('active').next().stop(true,true).slideDown('normal');
			} else {
				$(this).removeClass('active');
				$(this).next().stop(true,true).slideUp('normal');
			}
		});

	});
</script>
</div>
<div class="delivery">
	<a href="<?php echo $adlink ?>"><img src="<?php echo base_url()."site/images/".$advert ?>" class="img-responsive" style="width: 80%" alt=""></a>
</div>