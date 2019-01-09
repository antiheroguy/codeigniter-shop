
<!-- start: Main Menu -->
<div id="sidebar-left" class="span2">
	<div class="nav-collapse sidebar-nav">
		<ul class="nav nav-tabs nav-stacked main-menu">
			<li <?php echo ($this->uri->rsegment('1') == 'config' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/config"><i class="icon-cog"></i><span class="hidden-tablet"> Cấu hình trang Web</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'user' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/user"><i class="icon-user"></i><span class="hidden-tablet"> Quản lý người dùng</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'product' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/product"><i class="icon-star-empty"></i><span class="hidden-tablet"> Quản lý sản phẩm</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'category' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/category"><i class="icon-list-alt"></i><span class="hidden-tablet"> Quản lý danh mục</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'order' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/order"><i class="icon-shopping-cart"></i><span class="hidden-tablet"> Quản lý đơn hàng</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'slide' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/slide"><i class="icon-picture"></i><span class="hidden-tablet"> Quản lý trình chiếu</span></a></li>
			<li <?php echo ($this->uri->rsegment('1') == 'contact' ) ? "class='active'" : "" ?>><a href="<?php echo base_url() ?>admin/contact"><i class="icon-envelope"></i><span class="hidden-tablet"> Quản lý liên hệ</span></a></li>
		</ul>
	</div>
</div>
<!-- end: Main Menu -->

<noscript>
	<div class="alert alert-block span10">
		<h4 class="alert-heading">Warning!</h4>
		<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
	</div>
</noscript>