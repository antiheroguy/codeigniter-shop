<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white picture"></i><span class="break"></span>Quản lý trình chiếu</h2>
			<div class="box-icon">
				<a href="<?php echo base_url().'admin/slide/add' ?>"><h2>Thêm ảnh <i class="halflings-icon white plus"></i></h2></a><span class="break"></span>
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
						<th style="display:none">ID</th>
						<th>Ảnh</th>
						<th>Vị trí hiển thị</th>
						<th>Trạng thái</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) : ?>
						<tr>
							<td class="center" style="display:none"><?php echo $value->s_id ?></td>
							<td class="center"><img class="img-responsive" style="width: 200px" src="<?php echo base_url(). "site/images/".$value->s_name ?>" alt=""></td>
							<td class="center"><?php echo $value->s_position ?></td>
							<td class="center"><span class="label <?php echo $value->s_status == 1 ? "label-success" : "label-warning" ?>"><?php echo $value->s_status == 1 ? "Hiện" : "Ẩn" ?></span></td>
							<td class="center">
								<a class="btn btn-info" href="<?php echo base_url().'admin/slide/edit/'.$value->s_id ?>"> Sửa <i class="halflings-icon white edit"></i></a>
								<a class="btn btn-danger" href="<?php echo base_url().'admin/slide/delete/'.$value->s_id ?>" onclick='return confirm("Bạn có chắc chắn muốn xóa?")'> Xóa <i class="halflings-icon white trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>