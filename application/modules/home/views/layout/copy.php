<div class="container">
	<div class="cssmenu">
		<ul>
			<?php foreach ($foot_list as $key => $value): ?>
				<li><a href="<?php echo $value->c_link ?>"><?php echo $value->c_name ?></a></li>
			<?php endforeach ?>
		</ul>
	</div>
	<div class="copy">
		<p><?php echo $footer ?></p>
	</div>
	<div class="clearfix"> </div>
</div>