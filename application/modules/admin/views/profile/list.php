<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Thiết lập tài khoản</h2>
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
						<th style='display: none'>ID</th>
						<th>Tên người dùng</th>
						<th>Tên đầy đủ</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
						<tr>
						<td class='center' style='display: none'><?php echo $profile->a_id ?></td>
						<td class='center'><?php echo $profile->a_username ?></td>
						<td class='center'><?php echo $profile->a_name ?></td>
						<td class="center">
							<a class="btn btn-info" href="<?php echo base_url().'admin/profile/edit' ?>"> Sửa thông tin <i class="halflings-icon white edit"></i></a>
							<a class="btn btn-warning" href="<?php echo base_url().'admin/profile/change' ?>"> Đổi mật khẩu <i class="halflings-icon white trash"></i></a>
						</td>
						</tr>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>