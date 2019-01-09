<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Best extends MY_Controller{
	function __construct() {
		parent::__construct();
		$this->load->model('mproduct');
		$this->load->library('pagination');
		$this->data['message'] = $this->session->flashdata('message');
	}
	function index() {
		$this->data['active'] = 'detail';
		$this->data['header'] = 'Nổi bật';
		$input = array();
		$input['order'] = array('p_count', 'DESC');
		$input['where'] = array('p_status <>' => 0);
		$config = array();
		$config['total_rows'] = $this->mproduct->get_total($input);
		$config['base_url'] = base_url()."home/best/index";
		$config['per_page'] = 6;
		$config['uri_segment'] = 4;
		$config['next_link'] = "Trang sau";
		$config['prev_link'] = "Trang trước";
		$config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'Đầu tiên';
        $config['last_link'] = 'Cuối cùng';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
		$this->pagination->initialize($config);
		$limit = $config['per_page'];
		$start = intval($this->uri->rsegment(3));
		$input['limit'] = array($limit, $start);
		$this->data['product'] = $this->mproduct->get_list($input);
		$this->load->view('index',$this->data);
	}
}
?>