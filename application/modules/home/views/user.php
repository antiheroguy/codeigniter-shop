<?php
if (!$this->session->has_userdata('user')) {
	redirect(base_url());
}
	if(!empty($message)) {
		echo "<div class='alert alert-info'><button type='button' class='close' data-dismiss='alert'>×</button><strong>".$message."</strong>
	</div>";
	}
$info = $this->session->userdata('user');
?>
<h1>Thông tin tài khoản</h1>
<table class="table table-striped custab">
	<thead>
		<tr>
			<th>Thông tin</th>
			<th>Giá trị</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>Tên đầy đủ</td>
			<td><?php echo $info->u_name ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><?php echo $info->u_email ?></td>
		</tr>
		<tr>
			<td>Địa chỉ</td>
			<td><?php echo $info->u_address ?></td>
		</tr>
		<tr>
			<td>Số điện thoại</td>
			<td><?php echo $info->u_phone ?></td>
		</tr>
	</tbody>
</table>
<a href="<?php echo base_url('edit/'.$info->u_id) ?>" type="button" class="btn btn-info">Sửa thông tin</a>
<a style="float: right" href="<?php echo base_url('delete/'.$info->u_id) ?>" type="button" class="btn btn-danger" onclick="return confirm('Thao tác này không thể phục hồi, bạn có muốn tiếp tục?')">Xóa tài khoản</a>
<div class="clearfix"></div>
