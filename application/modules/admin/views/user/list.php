<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white user"></i><span class="break"></span>Quản lý người dùng</h2>
			<div class="box-icon">
				<a href="<?php echo base_url().'admin/user/add' ?>"><h2>Thêm người dùng <i class="halflings-icon white plus"></i></h2></a><span class="break"></span>
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
						<th>Ngày cập nhật</th>
						<th>Tên</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Địa chỉ</th>
						<th>Ẩn/Hiện</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) {
						$date = this_time($value->u_date);
						echo "<tr>";
						echo "<td class='center'>".$date['day']."/".$date['month']."/".$date['year']."<br />".$date['hour'].":".$date['minute'].":".$date['second']."</td>";
						echo "<td class='center'>".$value->u_name."</td>";
						echo "<td class='center'>".$value->u_email."</td>";
						echo "<td class='center'>".$value->u_phone."</td>";
						echo "<td class='center'>".$value->u_address."</td>";
						if ($value->u_status) {
							echo "<td class='center'><span class='label label-success'>Hiện</span></td>";
						} else {
							echo "<td class='center'><span class='label label-warning'>Ẩn</span></td>";
						}
						echo "<td class='center'><a class='btn btn-info' href='".base_url('admin/user/edit/').$value->u_id."'> Sửa <i class='halflings-icon white edit'></i></a> <a class='btn btn-danger' href='".base_url('admin/user/delete/').$value->u_id."' onclick='return confirm(\"Bạn có chắc chắn muốn xóa?\")'> Xóa <i class='halflings-icon white trash'></i></a></td>";
						echo "</tr>";
					}
					 ?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>