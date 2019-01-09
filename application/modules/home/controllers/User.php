<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('muser');
			$this->data['message'] = $this->session->flashdata('message');
			$this->load->helper('MY_date_helper');
		}
		function login() {
			if($this->session->has_userdata('user')) {
				redirect(base_url());
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('mail', 'Email', 'trim|required|valid_email');
				$this->form_validation->set_rules('password', 'Mật khẩu', 'trim|required');
				if($this->form_validation->run()) {
					$mail = $this->input->post('mail');
					$pass = md5($this->input->post('password'));
					$where = array('u_email' => $mail, 'u_password' => $pass);
					if ($this->muser->check_exists($where)) {
						$input['where'] = $where;
						$this->session->set_userdata('user', $this->muser->get_row($input));
						$this->session->set_flashdata('message','Đăng nhập thành công');
						redirect(base_url());
					}
					$this->session->set_flashdata('message','Thông tin đăng nhập không chính xác');
				}
			}
			$this->data['full_width'] = true;
			$this->data['active'] = 'login';
			$this->load->view('index',$this->data);
		}
		function index() {
			$this->data['active'] = 'user';
			$this->load->view('index',$this->data);
		}
		function check_email() {
			$mail = $this->input->post('mail');
			$where = array('u_email' => $mail);
			if($this->muser->check_exists($where)) {
				$this->form_validation->set_message(__FUNCTION__,'Emal đã tồn tại');
				return false;
			} return true;
		}
		function register() {
			if($this->session->has_userdata('user')) {
				redirect(base_url());
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$this->form_validation->set_rules('mail','Email','trim|required|valid_email|callback_check_email');
				$this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
				$this->form_validation->set_rules('repassword','Re-Password','trim|required|matches[password]');
				$this->form_validation->set_rules('phone','Số điện thoại','trim|required');
				$this->form_validation->set_rules('address','Địa chỉ','trim|required');
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$mail = $this->input->post('mail');
					$password = md5($this->input->post('password'));
					$phone = $this->input->post('phone');
					$address = $this->input->post('address');
					$date = today();
					$set = array('u_name' => $name, 'u_email' => $mail, 'u_password' => $password, 'u_phone' => $phone, 'u_address' => $address, 'u_date' => $date, 'u_status' => 1);
					if($this->muser->create($set)) {
						$this->session->set_flashdata('message','Đăng ký thành công');
						$input['where'] = array('u_email' => $mail);
						$log = $this->muser->get_row($input);
						$this->session->set_userdata('user', $log);
							redirect(base_url());
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
					}
				}
			}
			$this->data['full_width'] = true;
			$this->data['active'] = 'register';
			$this->load->view('index',$this->data);
		}
		function edit() {
			if(!$this->session->has_userdata('user')) {
				redirect(base_url());
			}
			$this->data['id'] = intval($this->uri->rsegment('3'));
			$this->data['info'] = $this->muser->get_info($this->data['id']);
			if(!$this->data['info'] || $this->data['id'] != $this->session->userdata('user')->u_id) {
				$this->session->set_flashdata('message','Liên kết không hợp lệ');
				redirect(base_url());
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$check_mail = $this->input->post('mail');
				if ($check_mail != $this->data['info']->u_email) {
					$this->form_validation->set_rules('mail','Email','trim|required|valid_email|callback_check_email');
				}
				$check_password = $this->input->post('password');
				if ($check_password) {
					$this->form_validation->set_rules('password','Password','trim|required|min_length[6]');
					$this->form_validation->set_rules('repassword','Re-Password','trim|required|matches[password]');
				}
				$this->form_validation->set_rules('phone','Số điện thoại','trim|required');
				$this->form_validation->set_rules('address','Địa chỉ','trim|required');
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$mail = $check_mail;
					if($check_password) {
						$password = md5($check_password);
					} else {
						$password = $this->data['info']->u_password;
					}
					$phone = $this->input->post('phone');
					$address = $this->input->post('address');
					$date = today();
					$set = array('u_name' => $name, 'u_email' => $mail, 'u_password' => $password, 'u_phone' => $phone, 'u_address' => $address, 'u_date' => $date, 'u_status' => 1);
					if($this->muser->update($this->data['id'], $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						$input['where'] = array('u_id' => $this->data['id']);
						$log = $this->muser->get_row($input);
						$this->session->set_userdata('user', $log);
						redirect(base_url('user'));
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url('user'));
					}
				}
			}
			$this->data['active'] = 'edit';
			$this->load->view('index',$this->data);
		}
		function delete() {
			$this->data['id'] = intval($this->uri->rsegment('3'));
			$this->data['info'] = $this->muser->get_info($this->data['id']);
			if(!$this->data['info'] || $this->data['id'] != $this->session->userdata('user')->u_id) {
				$this->session->set_flashdata('message','Liên kết không hợp lệ');
				redirect(base_url('user'));
			}
			if($this->muser->delete($this->data['id'])) {
				$this->session->set_flashdata('message','Xóa thành công');
				$this->session->unset_userdata('user');
				redirect(base_url());
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url('user'));
			}
		}
		function logout() {
			$this->session->unset_userdata('user');
			$this->cart->destroy();
			redirect(base_url());
		}
	}
?>