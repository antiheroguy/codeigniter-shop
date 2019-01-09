<?php defined('BASEPATH') OR exit('No direct script access allowed');
	class Contact extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mcontact');
			$this->load->helper('MY_date_helper');
		}
		function index() {
			if($this->input->post()) {
				if($this->session->has_userdata('user')) {
					$name = $this->session->userdata('user')->u_name;
					$mail = $this->session->userdata('user')->u_email;
				} else {
					$this->form_validation->set_rules('name','Tên','trim|required');
					$this->form_validation->set_rules('mail','Email','trim|required|valid_email');
				}
				$this->form_validation->set_rules('content','Nội dung','trim|required');
				if($this->form_validation->run()) {
					if(!$this->session->has_userdata('user')) {
						$name = $this->input->post('name');
						$mail = $this->input->post('mail');
					}
					$content = $this->input->post('content');
					$date = today();
					$set = array('u_name' => $name, 'u_email' => $mail, 'ct_content' => $content, 'ct_date' => $date);
					if($this->mcontact->create($set)) {
						$this->session->set_flashdata('message','Phản hồi thành công');
						redirect(base_url());
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
					}
				}
			}
			$this->data['full_width'] = true;
			$this->data['active'] = 'contact';
			$this->load->view('index',$this->data);
		}
	}
?>