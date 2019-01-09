<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	function __construct() {
		parent::__construct();
		if($this->session->has_userdata('logged')) {
			redirect(base_url().'admin/home');
		}
		$this->load->model('madmin');
	}
	function index() {
		if($this->input->post()) {
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');
			if($this->form_validation->run()) {
				$user = $this->input->post('username');
				$pass = md5($this->input->post('password'));
				$where = array('a_username' => $user, 'a_password' => $pass);
				if ($this->madmin->check_exists($where)) {
					$input['where'] = $where;
					$profile = $this->madmin->get_row($input);
					$this->session->set_userdata('logged', $profile);
					redirect(base_url().'admin/home');
				}
				$this->session->set_flashdata('message','Thông tin đăng nhập không chính xác');
			}
		}
		$this->load->view('login');
	}
}
?>