<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Home extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->helper('MY_date_helper');
		}
		function index() {
			$data['active'] = 'home';
			$this->load->view('index',$data);
		}
		function logout() {
			$this->session->unset_userdata('logged');
			redirect(base_url().'admin/login');
		}
	}
 ?>