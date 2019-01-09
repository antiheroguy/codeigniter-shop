<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Product extends MY_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('mproduct');
		$this->load->library('pagination');
		$this->data['message'] = $this->session->flashdata('message');
	}
	function index() {
		$this->data['id'] = intval($this->uri->rsegment('3'));
		$this->data['info'] = $this->mproduct->get_info($this->data['id']);
		if(!$this->data['info']) {
			$this->session->set_flashdata('message','Sản phẩm không hợp lệ');
			redirect(base_url());
		}
		$input['where'] = array('c_id' => $this->data['info']->c_id);
		$this->data['info']->category = $this->mcategory->get_row($input);
		$input['order'] = array('p_date', 'DESC');
		$input['limit'] = array(3,0);
		$input['where'] = array('c_id' => $this->data['info']->c_id, 'p_id <>' => $this->data['info']->p_id, 'p_status <>' => 0);
		$this->data['product'] = $this->mproduct->get_list($input);
		$this->data['active'] = 'product';
		$this->load->view('index',$this->data);
	}
	function search() {
		$this->data['key'] = $this->input->get('search');
		$input['like'] = array('p_name', $this->data['key']);
		$input['where'] = array('p_status <>' => 0);
		$this->data['product'] = $this->mproduct->get_list($input);
		$this->data['active'] = 'search';
		$this->load->view('index',$this->data);
	}
}
?>