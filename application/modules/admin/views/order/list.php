<div class="row-fluid sortable">
	<div class="box span12">
		<div class="box-header" data-original-title>
			<h2><i class="halflings-icon white shopping-cart"></i><span class="break"></span>Quản lý đơn hàng</h2>
			<div class="box-icon">
				</span>
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
						<th>Người mua</th>
						<th>Điện thoại</th>
						<th>Địa chỉ</th>
						<th>Thành tiền</th>
						<th>Tin nhắn</th>
						<th>Trạng thái</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
						<?php foreach ($list as $key => $value): ?>
							<tr>
								<?php $date = this_time($value->t_date) ?>
								<td class="center"><?php echo $date['day']."/".$date['month']."/".$date['year']."<br />".$date['hour'].":".$date['minute'].":".$date['second'] ?></td>
								<td class="center"><?php echo $value->u_name ?></td>
								<td class="center"><?php echo $value->u_phone ?></td>
								<td class="center"><?php echo $value->u_address ?></td>
								<td class="center"><?php echo $value->t_amount ?></td>
								<td class="center"><?php echo $value->t_message ?></td>
								<td class="center"><?php echo ($value->t_status != 0) ? "<span class='label label-success'>Đã giao hàng</span>" : "<span class='label label-warning'>Đang chờ</span>" ?></td>
								<td class="center">
									<a class="btn btn-success" href="<?php echo base_url().'admin/order/detail/'.$value->t_id ?>">
										Chi tiết <i class="halflings-icon white zoom-in"></i>
									</a>
									<?php if ($value->t_status == 0): ?>
										<a class="btn btn-info" href="<?php echo base_url().'admin/order/active/'.$value->t_id ?>" onclick='return confirm("Kích hoạt đơn hàng ?")'>
											Kích hoạt <i class="halflings-icon white edit"></i>
										</a>
									<?php else: ?>
										<a class="btn btn-warning" href="<?php echo base_url().'admin/order/active/'.$value->t_id ?>" onclick='return confirm("Hủy kích hoạt đơn hàng ?")'>
										Hủy kích hoạt<i class="halflings-icon white edit"></i>
										</a>
									<?php endif ?>
									<a class="btn btn-danger" href="<?php echo base_url().'admin/order/delete/'.$value->t_id ?>" onclick='return confirm("Bạn có chắc chắn muốn xóa?")'>
										Xóa <i class="halflings-icon white trash"></i>
									</a>
								</td>
							</tr>
						<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>