<form action="<?php echo base_url("home/cart/update") ?>" method="POST">
	<div class="panel panel-info">
		<div class="panel-heading">
			<div class="panel-title">
				<div class="row">
					<div class="col-xs-6">
						<h5><span class="glyphicon glyphicon-shopping-cart"></span> Thông tin giỏ hàng</h5>
					</div>
					<div class="col-xs-6">
						<a href="<?php echo base_url() ?>" type="button" class="btn btn-primary btn-sm btn-block">
							<span class="glyphicon glyphicon-share-alt"></span> Tiếp tục mua sắm
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<?php if ($total == 0): ?>
				<div class="row">
					<div class="col-md-12 col-xs-12"><h4>Chưa có sản phẩm nào trong giỏ hàng</h4></div>
				</div>
			<?php endif ?>
			<?php $total_amount = 0 ?>
			<?php foreach ($cart as $key => $value): ?>
				<?php $total_amount += ($value['price']*$value['qty']) ?>
				<div class="row">
					<div class="col-xs-2"><img class="img-responsive" src="<?php echo base_url('upload/'.$value['image']) ?>">
					</div>
					<div class="col-xs-4">
						<h4 class="product-name"><strong><?php echo $value['name'] ?></strong></h4><h4><small><?php echo $value['detail'] ?></small></h4>
					</div>
					<div class="col-xs-6">
						<div class="col-xs-6 text-right">
							<h4><strong style="color:#f00"><?php echo $value['price'] ?><span class="text-muted"> X </span></strong></h4>
						</div>
						<div class="col-xs-4">
							<input type="number" min="1" class="form-control" id="<?php echo "sp_".$value['id'] ?>" name="<?php echo "sp_".$value['id'] ?>" value="<?php echo $value['qty'] ?>">
						</div>
						<div class="col-xs-2">
							<a href="<?php echo base_url('home/cart/delete/'.$value['rowid']) ?>" type="button" class="btn btn-danger btn-block">Xóa
								<span class="glyphicon glyphicon-trash"></span>
							</a>
						</div>
					</div>
				</div>
				<hr />
			<?php endforeach ?>
			<?php if ($total != 0): ?>
				<div class="row">
					<div class="col-xs-6">
						<input name="update" type="submit" class="btn btn-default btn-info" value="Cập nhật giỏ hàng">
					</div>
					<div class="col-xs-6">
						<a href="<?php echo base_url('home/cart/delete') ?>" type="button" class="btn btn-danger" style="float: right">Xóa toàn bộ
							<span class="glyphicon glyphicon-trash"></span>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
			<?php endif ?>
		</div>
		<?php if ($total != 0): ?>
			<div class="panel-footer">
			<div class="row text-center">
				<div class="col-xs-9">
					<h4 class="text-right">Tổng số : <strong style="color:#f00"><?php echo $total_amount ?> VND</strong></h4>
				</div>
				<div class="col-xs-3">
					<a href="<?php echo base_url('order') ?>" type="button" class="btn btn-success btn-block">Thanh toán</a>
				</div>
			</div>
		</div>
		<?php endif ?>
	</div>
</form>