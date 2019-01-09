<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("layout/head"); ?>
</head>
<body>
	<?php $this->load->view("layout/navbar"); ?>
	<div class="container-fluid-full">
		<div class="row-fluid">
			<?php $this->load->view("layout/sidebar"); ?>
			<!-- start: Content -->
			<div id="content" class="span10">


				<?php $this->load->view($active); ?>



			</div><!--/.fluid-container-->

			<!-- end: Content -->
		</div><!--/#content.span10-->
	</div><!--/fluid-row-->

	<div class="clearfix"></div>

	<?php
	$this->load->view("layout/footer");
	$this->load->view("layout/script");
	?>

</body>
</html>
