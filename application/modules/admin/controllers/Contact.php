<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Contact extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mcontact');
			$this->load->helper('MY_date_helper');
		}
		function index() {
			$result = array();
			$data['list'] = $this->mcontact->get_list($result);
			$data['active'] = 'contact/list';
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}

		function delete() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->mcontact->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Liên hệ không hợp lệ');
				redirect(base_url().'admin/contact');
			}
			if($this->mcontact->delete($data['id'])) {
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/contact');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/contact');
			}
		}
	}
?>