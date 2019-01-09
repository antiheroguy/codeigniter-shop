<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Order extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('morder');
			$this->load->model('mtransaction');
			$this->load->model('mproduct');
			$this->load->helper('MY_date_helper');
		}
		function index() {
			$result = array();
			$result['order'] = array('t_date','DESC');
			$data['list'] = $this->mtransaction->get_list($result);
			$data['message'] = $this->session->flashdata('message');
			$data['active'] = 'order/list';
			$this->load->view('index',$data);
		}
		function active() {
			$data['id'] = $this->uri->rsegment('3');
			$data['info'] = $this->mtransaction->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Đơn hàng không hợp lệ');
				redirect(base_url().'admin/order');
			}
			$status = 1 - $data['info']->t_status;
			$set = array('t_status' => $status);
			if($this->mtransaction->update($data['id'], $set)) {
				$this->session->set_flashdata('message','Cập nhật thành công');
				redirect(base_url().'admin/order');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/order');
			}
		}
		function delete() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->mtransaction->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Đơn hàng không hợp lệ');
				redirect(base_url().'admin/order');
			}
			if($this->mtransaction->delete($data['id'])) {
				$id = $data['info']->t_id;
				$input['where'] = array('t_id' => $id);
				$order = $this->morder->get_list($input);
				foreach ($order as $key => $value) {
					$this->morder->delete($value->o_id);
				}
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/order');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/order');
			}
		}
		function detail() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->mtransaction->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Đơn hàng không hợp lệ');
				redirect(base_url().'admin/order');
			}
			$id = $data['info']->t_id;
			$input['where'] = array('t_id' => $id);
			$data['order'] = $this->morder->get_list($input);
			$data['list'] = $this->morder->john('product', 'p_id');
			foreach ($data['list'] as $key => $value) {
				foreach ($data['order'] as $row => $item) {
					if ($item->p_id == $value->p_id) {
						$item->p_name = $value->p_name;
					}
				}
			}
			$data['active'] = 'order/detail';
			$this->load->view('index',$data);
		}
	}
?>