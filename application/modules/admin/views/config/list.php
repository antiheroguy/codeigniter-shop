<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white cog"></i><span class="break"></span>Cấu hình Website</h2>
			<div class="box-icon">
				<span class="break"></span>
				<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
			</div>
		</div>
		<div class="box-content">
			<?php if(!empty($message)) {
				echo "<div class='alert alert-info'>
				<button type='button' class='close' data-dismiss='alert'>×</button>
				<strong>".$message."</strong>
			</div>";
				} ?>
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th>Logo</th>
						<th>Tiêu đề</th>
						<th>Chân trang</th>
						<th>Quảng cáo</th>
						<th>Điện thoại</th>
						<th>Theo dõi</th>
						<th>Email</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) {
						echo "<tr>";
						echo "<td class='center'><img class='img-responsive' style='width: 100px' src='".base_url()."site/images/".$value->cf_logo."'></td>";
						echo "<td class='center'>".$value->cf_title."</td>";
						echo "<td class='center'>".$value->cf_footer."</td>";
						echo "<td class='center'><a href='".$value->cf_adlink."'><img class='img-responsive' style='width: 100px' src='".base_url()."site/images/".$value->cf_advert."'></a></td>";
						echo "<td class='center'>Điện thoại: ".$value->cf_phone."<br/>Hotline: ".$value->cf_hotline."</td>";
						echo "<td class='center'><a href='".$value->cf_facebook."'>Facebook</a><br/><a href='".$value->cf_twitter."'>Twitter</a><br/><a href='".$value->cf_instagram."'>Instagram</a><br/><a href='".$value->cf_google."'>Google</a></td>";
						echo "<td class='center'>".$value->cf_email."</td>";
						echo "<td class='center'><a class='btn btn-info' href='".base_url('admin/config/edit/').$value->cf_id."'> Sửa <i class='halflings-icon white edit'></i></a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>