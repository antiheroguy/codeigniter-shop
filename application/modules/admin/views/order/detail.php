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
			<table class="table table-striped table-bordered bootstrap-datatable datatable">
				<thead>
					<tr>
						<th style="display: none">ID</th>
						<th>Mã đơn hàng</th>
						<th>Tên sản phẩm</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
					</tr>
				</thead>
				<tbody>
						<?php foreach ($order as $key => $value): ?>
							<tr>
								<td style="display: none" class="center"><?php echo $value->o_id ?></td>
								<td class="center"><?php echo $value->t_id ?></td>
								<td class="center"><?php echo $value->p_name ?></td>
								<td class="center"><?php echo $value->o_quantity ?></td>
								<td class="center"><?php echo $value->o_amount ?></td>
							</tr>
						<?php endforeach ?>
				</tbody>
			</table>
		</div>
	</div><!--/span-->
</div>