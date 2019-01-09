<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends MY_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('mslide');
		$this->load->model('mproduct');
		$filter['where'] = array('s_status <>' => 0);
		$filter['order'] = array('s_position', 'ASC');
		$this->data['slide'] = $this->mslide->get_list($filter);
		$this->data['message'] = $this->session->flashdata('message');
	}
	function index() {
		$this->data['active'] = 'home';
		$this->data['has_slide'] = true;
		$input = array();
		$input['where'] = array('p_status <>' => 0);
		$input['order'] = array('p_date','DESC');
		$input['limit'] = array(6,0);
		$this->data['product'] = $this->mproduct->get_list($input);
		$input1['where'] = array('p_status <>' => 0);
		$input1['order'] = array('p_count', 'DESC');
		$input1['limit'] = array(6,0);
		$this->data['best_buy'] = $this->mproduct->get_list($input1);
		$input2['where'] = array('p_discount <>' => 0, 'p_status <>' => 0);
		$input2['order'] = array('p_discount', 'DESC');
		$input2['limit'] = array(6,0);
		$this->data['discount'] = $this->mproduct->get_list($input2);
		$this->load->view('index',$this->data);
	}
}
?>