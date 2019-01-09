<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white star-empty"></i><span class="break"></span>Quản lý sản phẩm</h2>
			<div class="box-icon">
				<a href="<?php echo base_url().'admin/product/add' ?>"><h2>Thêm sản phẩm <i class="halflings-icon white plus"></i></h2></a><span class="break"></span>
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
						<th>Ảnh</th>
						<th>Tên</th>
						<th>Danh mục</th>
						<th>Giá</th>
						<th>Giảm giá</th>
						<th>Đã bán</th>
						<th>Ẩn/Hiện</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($list as $key => $value) : ?>
						<?php $date = this_time($value->p_date) ?>
						<tr>
							<td class="center"><?php echo $date['day']."/".$date['month']."/".$date['year']."<br />".$date['hour'].":".$date['minute'].":".$date['second'] ?></td>
							<td class="center"><img class="img-responsive" style="width: 100px" src="<?php echo base_url(). "upload/" .$value->p_image ?>" alt=""></td>
							<td class="center"><?php echo $value->p_name ?></td>
							<td class="center"><?php echo $value->c_name ?></td>
							<td class="center"><?php echo $value->p_price ?></td>
							<td class="center"><?php echo $value->p_discount ?> %</td>
							<td class="center"><?php echo $value->p_count ?></td>
							<td class="center"><span class="label <?php echo $value->p_status == 1 ? "label-success" : "label-warning" ?>"><?php echo $value->p_status == 1 ? "Hiện" : "Ẩn" ?></span></td>
							<td class="center">
								<a class="btn btn-info" href="<?php echo base_url().'admin/product/edit/'.$value->p_id ?>"> Sửa <i class="halflings-icon white edit"></i></a>
								<a class="btn btn-danger" href="<?php echo base_url().'admin/product/delete/'.$value->p_id ?>" onclick='return confirm("Bạn có chắc chắn muốn xóa?")'> Xóa <i class="halflings-icon white trash"></i></a>
							</td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>