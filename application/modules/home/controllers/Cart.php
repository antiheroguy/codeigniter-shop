<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Cart extends MY_Controller{
	function __construct() {
		parent::__construct();
	}

	function add() {
		$this->load->model('mproduct');
		$id = $this->uri->rsegment(3);
		$product = $this->mproduct->get_info($id);
		if(!$product) {
			redirect(base_url());
		}
		$price = ($product->p_discount != 0 ) ? round(($product->p_price * (100 - $product->p_discount))/100) : round($product->p_price);
		$qty = 1;
		$data['id'] = $product->p_id;
		$data['qty'] = $qty;
		$data['name'] = $product->p_name;
		$data['image'] = $product->p_image;
		$data['detail'] = $product->p_detail;
		$data['price'] = $price;
		$this->cart->insert($data);
		redirect(base_url()."cart");

	}
	function index() {
		$this->data['cart'] = $this->cart->contents();
		$this->data['total'] = $this->cart->total_items();
		$this->data['full_width'] = true;
		$this->data['active'] = 'cart';
		$this->load->view('index',$this->data);
	}

	function update(){
		$this->data['cart'] = $this->cart->contents();
		if($this->input->post('update')) {
			foreach($this->data['cart'] as $key => $value) {
				$update_qty = $this->input->post('sp_'.$value['id']);
				$data = array('rowid' => $key, 'qty' => $update_qty );
				$this->cart->update($data);
			}
		}
		redirect(base_url('cart'));
	}

	function delete() {
		$rowid = $this->uri->rsegment(3);
		$this->data['cart'] = $this->cart->contents();
		if(!empty($rowid)) {
			$this->data['cart'] = $this->cart->contents();
			foreach($this->data['cart'] as $key => $value) {
				if($value['rowid'] == $rowid) {
					$update_qty = 0;
					$data = array('rowid' => $key, 'qty' => $update_qty );
					$this->cart->update($data);
				}
			}
		} else {
			$this->cart->destroy();
		}
		redirect(base_url('cart'));
	}
}