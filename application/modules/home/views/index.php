<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("layout/head"); ?>
</head>
<body>
	<div class="header">
		<?php $this->load->view("layout/header"); ?>
	</div>
	<div class="slider">
		<?php if(isset($has_slide)) { $this->load->view("layout/slider"); } ?>
	</div>
	<div class="main">
		<div class="content_top">
			<div class="container">
				<?php if (isset($full_width)) {
					echo "<div class='row'>";
					$this->load->view($active);
					echo "</div>";
				} else {
					echo "<div class='col-md-3 sidebar_box'>";
					$this->load->view('layout/sidebar');
					echo "</div>";
					echo "<div class='col-md-9 content_right'>";
					$this->load->view($active);
					echo "</div>";
				}
				?>
			</div>
		</div>
	</div>
	<div class="footer_bg"></div>
	<div class="footer">
		<?php $this->load->view("layout/footer"); ?>
	</div>
	<div class="footer_bottom">
		<?php $this->load->view("layout/copy"); ?>
	</div>
</body>
</html>