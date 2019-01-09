<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class About extends MY_Controller{
		function __construct() {
			parent::__construct();
		}
		function index() {
			$this->data['full_width'] = true;
			$this->data['active'] = 'about';
			$this->load->view('index',$this->data);
		}
	}
?>