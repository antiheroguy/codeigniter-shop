<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white list-alt"></i><span class="break"></span>Quản lý danh mục</h2>
			<div class="box-icon">
				<a href="<?php echo base_url().'admin/category/add' ?>"><h2>Thêm danh mục <i class="halflings-icon white plus"></i></h2></a><span class="break"></span>
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
						<th>Tên</th>
						<th>Cấp cha</th>
						<th>Vị trí hiển thị</th>
						<th>Kiểu hiển thị</th>
						<th>Liên kết</th>
						<th>Ẩn/Hiện</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) {
						echo "<tr>";
						echo "<td class='center' style='display: none'>".$value->c_id."</td>";
						echo "<td class='center'>".$value->c_name."</td>";
						echo "<td class='center'>".$value->parent_name."</td>";
						echo "<td class='center'>".$value->c_position."</td>";
						echo "<td class='center'>";
						switch ($value->c_view) {
							case 'category':
								echo "Danh mục";
								break;
							case 'menu':
								echo "Thực đơn";
								break;
							case 'footer':
								echo "Chân trang";
								break;
							default:
								echo "Không xác định";
								break;
						}
						echo "</td>";
						echo "<td class='center'>".$value->c_link."</td>";
						if ($value->c_status) {
							echo "<td class='center'><span class='label label-success'>Hiện</span></td>";
						} else {
							echo "<td class='center'><span class='label label-warning'>Ẩn</span></td>";
						}
						echo "<td class='center'><a class='btn btn-info' href='".base_url('admin/category/edit/').$value->c_id."'> Sửa <i class='halflings-icon white edit'></i></a> <a class='btn btn-danger' href='".base_url('admin/category/delete/').$value->c_id."' onclick='return confirm(\"Bạn có chắc chắn muốn xóa?\")'> Xóa <i class='halflings-icon white trash'></i></a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>