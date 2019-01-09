<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white envelope"></i><span class="break"></span>Quản lý liên hệ</h2>
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
						<th>Ngày tháng</th>
						<th>Tên người dùng</th>
						<th>Email</th>
						<th>Nội dung</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) {
						$date = this_time($value->ct_date);
						echo "<tr>";
						echo "<td class='center'>".$date['day']."/".$date['month']."/".$date['year']."<br />".$date['hour'].":".$date['minute'].":".$date['second']."</td>";
						echo "<td class='center'>".$value->u_name."</td>";
						echo "<td class='center'>".$value->u_email."</td>";
						echo "<td class='center'>".$value->ct_content."</td>";
						echo "<td class='center'><a class='btn btn-danger' href='".base_url('admin/contact/delete/').$value->ct_id."' onclick='return confirm(\"Bạn có chắc chắn muốn xóa?\")'> Xóa <i class='halflings-icon white trash'></i></a></td>";
						echo "</tr>";
					}
					?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>