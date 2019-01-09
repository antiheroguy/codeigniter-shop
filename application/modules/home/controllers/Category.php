<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Category extends MY_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('mproduct');
		$this->data['message'] = $this->session->flashdata('message');
	}
	function index() {
		$this->data['id'] = intval($this->uri->rsegment('3'));
		$this->data['info'] = $this->mcategory->get_info($this->data['id']);
		if(!$this->data['info']) {
			$this->session->set_flashdata('message','Danh mục không hợp lệ');
			redirect(base_url());
		}
		$input['where'] = array('c_id' => $this->data['id'], 'p_status <>' => 0);
		if ($this->data['info']->c_parent != 0) {
			$this->data['product'] = $this->mproduct->get_list($input);
		} else {
			redirect(base_url());
		}
		$this->data['active'] = 'category';
		$this->load->view('index',$this->data);
	}
}
?>