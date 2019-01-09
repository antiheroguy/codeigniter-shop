<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Profile extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('madmin');
		}
		function index() {
			$data['active'] = 'profile/list';
			$data['message'] = $this->session->flashdata('message');
			$data['profile'] = $this->session->userdata('logged');
			$this->load->view('index',$data);
		}
		function check_admin() {
			$username = $this->input->post('username');
			$where = array('a_username' => $username);
			if($this->madmin->check_exists($where)) {
				$this->form_validation->set_message(__FUNCTION__,'Tên người dùng đã tồn tại');
				return false;
			} return true;
		}
		function edit() {
			$data['active'] = 'profile/edit';
			$data['profile'] = $this->session->userdata('logged');
			$id = $data['profile']->a_id;
			$data['info'] = $this->madmin->get_info($id);
			if ($this->input->post()) {
				$this->form_validation->set_rules('name','Tên đầy đủ','trim|required');
				$username = $this->input->post('username');
				if($username != $data['info']->a_username) {
					$this->form_validation->set_rules('username','Tên người dùng','trim|required|callback_check_admin');
				}
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$username = $this->input->post('username');
					$set = array('a_name' => $name, 'a_username' => $username);
					if($this->madmin->update($id, $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						$this->session->userdata('logged')->a_username = $username;
						$this->session->userdata('logged')->a_name = $name;
						redirect(base_url().'admin/profile');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/profile');
					}
				}
			}
			$this->load->view('index',$data);
		}
		function check_password() {
			$old = md5($this->input->post('old'));
			$id = $this->session->userdata('logged')->a_id;
			$where = array('a_password' => $old, 'a_id' => $id);
			if(!$this->madmin->check_exists($where)) {
				$this->form_validation->set_message(__FUNCTION__,'Vui lòng nhật chính xác mật khẩu');
				return false;
			} return true;
		}
		function change() {
			$data['active'] = 'profile/change';
			$data['profile'] = $this->session->userdata('logged');
			$id = $data['profile']->a_id;
			$data['info'] = $this->madmin->get_info($id);
			if ($this->input->post()) {
				$this->form_validation->set_rules('old','Mật khẩu cũ','trim|required|callback_check_password');
				$this->form_validation->set_rules('password','Mật khẩu','trim|required|min_length[6]');
				$this->form_validation->set_rules('repassword','Nhập lại','trim|required|matches[password]');
				if($this->form_validation->run()) {
					$password = md5($this->input->post('password'));
					$set = array('a_password' => $password);
					if($this->madmin->update($id, $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						$this->session->userdata('logged')->a_password = $password;
						redirect(base_url().'admin/profile');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/profile');
					}
				}
			}
			$this->load->view('index',$data);
		}
	}
?>