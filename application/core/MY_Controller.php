<?php defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller {
	protected $data = array();
	function __construct() {
		parent::__construct();
		$controller = $this->uri->segment('1');
		switch($controller) {
			case 'admin': {
				$this->check_login();
				break;
			}
			default : {

				//load cart
				$this->load->library('cart');
				$this->data['total'] = $this->cart->total_items();
				//load cấu hình
				$this->load->model('mconfig');
				$config = $this->mconfig->get_row();
				$this->data['logo'] = $config->cf_logo;
				$this->data['advert'] = $config->cf_advert;
				$this->data['adlink'] = $config->cf_adlink;
				$this->data['facebook'] = $config->cf_facebook;
				$this->data['google'] = $config->cf_google ;
				$this->data['twitter'] = $config->cf_twitter ;
				$this->data['instagram'] = $config->cf_instagram ;
				$this->data['hotline'] = $config->cf_hotline ;
				$this->data['phone'] = $config->cf_phone ;
				$this->data['footer'] = $config->cf_footer ;
				$this->data['about'] = $config->cf_about ;
				$this->data['email'] = $config->cf_email ;
				$this->data['title'] = $config->cf_title ;
				$this->data['address'] = $config->cf_address;
				$this->data['payment'] = $config->cf_payment;

				// load danh mục
				$this->load->model('mcategory');
				$input['order'] = array('c_position','ASC');

				$input['where'] = array('c_parent' => 0, 'c_view' => 'category', 'c_status <>' => 0);
				$category = $this->mcategory->get_list($input);
				foreach ($category as $key => $value) {
					$input['where'] = array('c_parent' => $value->c_id);
					$input['order'] = array('c_position','ASC');
					$sub = $this->mcategory->get_list($input);
					$value->sub = $sub;
				}
				$this->data['category'] = $category;

				$input['where'] = array('c_parent' => 0, 'c_view' => 'menu', 'c_status <>' => 0);
				$this->data['menu'] = $this->mcategory->get_list($input);

				$input['where'] = array('c_parent' => 0, 'c_view' => 'footer', 'c_status <>' => 0);
				$this->data['foot_list'] = $this->mcategory->get_list($input);

			}
		}
	}
	private function check_login() {
		if(!$this->session->has_userdata('logged')) {
			redirect(base_url().'admin/login');
		}
	}
}
?>