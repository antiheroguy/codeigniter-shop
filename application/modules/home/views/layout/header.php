<div class="header_top">
	<div class="container">
		<div class="logo">
			<a href="<?php echo base_url() ?>"><img src="<?php echo base_url()."site/images/".$logo ?>" alt=""/></a>
		</div>
		<ul class="shopping_grid">
			<?php if ($this->session->has_userdata('user')): ?>
				<li><span class="glyphicon glyphicon-user"></span> <?php echo $this->session->userdata('user')->u_name ?></li>
				<a href="<?php echo base_url('user') ?>"><li>Thông tin tài khoản</li></a>
				<a href="<?php echo base_url('logout') ?>"><li>Đăng Xuất</li></a>
			<?php else: ?>
				<a href="<?php echo base_url('register') ?>"><li>Đăng Ký</li></a>
				<a href="<?php echo base_url('login') ?>"><li>Đăng Nhập</li></a>
			<?php endif ?>
			<a href="<?php echo base_url()."cart" ?>"><li><span class="m_1">Giỏ Hàng</span>&nbsp;&nbsp;<?php echo $total ?>&nbsp;<img src="<?php echo base_url()."site/" ?>images/bag.png" alt=""/></li></a>
			<div class="clearfix"> </div>
		</ul>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="h_menu4"><!-- start h_menu4 -->
	<div class="container">
		<a class="toggleMenu" href="#">Menu</a>
		<ul class="nav">
			<?php foreach ($menu as $key => $value): ?>
				<li><a href="<?php echo base_url($value->c_link) ?>" data-hover="<?php echo $value->c_name ?>"><?php echo $value->c_name ?></a></li>
			<?php endforeach ?>
		</ul>
		<script type="text/javascript" src="<?php echo base_url()."site/" ?>js/nav.js"></script>
	</div><!-- end h_menu4 -->
</div>