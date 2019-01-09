<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->load->view("layout/head"); ?>
</head>
<body style="background: url(<?php echo base_url(); ?>public/img/bg-login.jpg) !important;">
	<div class="container-fluid-full">
		<div class="row-fluid">

			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<!-- <a href="index.html"><i class="halflings-icon home"></i></a> -->
						<!-- <a href="#"><i class="halflings-icon cog"></i></a> -->
					</div>
					<h1 style="color:#578ebe; display: block; text-align: center; margin-left: 0px">Login to your account</h1>
					<form class="form-horizontal"  method="post">
						<fieldset>

							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="halflings-icon user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="Username"/>
							</div>
							<?php echo form_error('username'); ?>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="halflings-icon lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="Password"/>
							</div>
							<?php echo form_error('password'); ?>
							<div class="clearfix"></div>
							<div style="text-align: center; color: #f00"><?php echo $this->session->flashdata('message') ?></div>

							<!-- <label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label> -->

							<div class="button-login">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
							<div class="clearfix"></div>
						</fieldset>
					</form>
					<!-- <hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p> -->
				</div><!--/span-->
			</div><!--/row-->


		</div><!--/.fluid-container-->

	</div><!--/fluid-row-->

	<?php $this->load->view("layout/script"); ?>
</body>
</html>