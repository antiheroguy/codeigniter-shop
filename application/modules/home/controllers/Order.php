<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Order extends MY_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('mtransaction');
		$this->load->model('morder');
		$this->load->model('mproduct');
		$this->data['message'] = $this->session->flashdata('message');
		$this->load->helper('MY_date_helper');
	}

	function index() {
		$this->data['cart'] = $this->cart->contents();
		$this->data['total'] = $this->cart->total_items();
		if($this->data['total'] <= 0) {
			redirect(base_url());
		}
		$this->data['info'] = $this->session->userdata('user');
		$this->data['amount'] = 0;
		foreach ($this->data['cart'] as $key => $value) {
			$this->data['amount'] += ($value['price']*$value['qty']);
		}
		if($this->input->post()) {
			$this->form_validation->set_rules('name','Tên','trim|required');
			$this->form_validation->set_rules('mail','Email','trim|required|valid_email');
			$this->form_validation->set_rules('phone','Số điện thoại','trim|required');
			$this->form_validation->set_rules('address','Địa chỉ','trim|required');
			if($this->form_validation->run()) {
				$id = ($this->data['info']->u_id) ? $this->data['info']->u_id : 0;
				$name = $this->input->post('name');
				$mail = $this->input->post('mail');
				$phone = $this->input->post('phone');
				$address = $this->input->post('address');
				$content = ($this->input->post('content')) ? $this->input->post('content') : "";
				$date = today();
				$set = array('u_id' => $id, 'u_name' => $name, 'u_email' => $mail, 'u_phone' => $phone, 'u_address' => $address, 't_message' => $content, 't_amount' => $this->data['amount'], 't_date' => $date, 't_status' => 0);
				if($this->mtransaction->create($set)) {
					$trans_id = $this->db->insert_id();
					foreach ($this->data['cart'] as $key => $value) {
						$subtotal = $value['price']*$value['qty'];
						$record = array('t_id' => $trans_id, 'p_id' => $value['id'], 'o_quantity' => $value['qty'], 'o_amount' => $subtotal);
						$this->morder->create($record);
						$product = $this->mproduct->get_info($value['id']);
						$buy = $product->p_count + $value['qty'];
						$buyed = array('p_count' => $buy);
						$this->mproduct->update($value['id'], $buyed);
					}
					$this->session->set_flashdata('message','Đặt hàng thành công, chúng tôi sẽ giao hàng cho bạn sớm nhất');
					$this->cart->destroy();
					redirect(base_url());
				} else {
					$this->session->set_flashdata('message','Đã có lỗi xảy ra');
					redirect(base_url());
				}
			}
		}
		$this->data['active'] = 'order';
		$this->load->view('index',$this->data);
	}
}
?>