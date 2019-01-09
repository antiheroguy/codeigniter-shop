<div class="callbacks_container">
	<ul class="rslides" id="slider">
		<?php foreach ($slide as $key => $value): ?>
			<li><img src="<?php echo base_url()."site/images/".$value->s_name ?>" class="img-responsive" alt=""/>
			<div class="banner_desc">
				<!-- <h1>We Provide Worlds top fashion for less fashionpress.</h1> -->
				<h1><?php echo $value->s_title ?></h1>
				<h2><?php echo $value->s_link ?></h2>
			</div>
			</li>
		<?php endforeach ?>
	</ul>
</div>