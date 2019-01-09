<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('muser');
			$this->load->helper('MY_date_helper');
		}
		function index() {
			$data['active'] = 'user/list';
			$result = array();
			$data['list'] = $this->muser->get_list($result);
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}
		function check_email() {
			$mail = $this->input->post('mail');
			$where = array('u_email' => $mail);
			if($this->muser->check_exists($where)) {
				$this->form_validation->set_message(__FUNCTION__,'Emal đã tồn tại');
				return false;
			} return true;
		}
		function add() {
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
						$this->session->set_flashdata('message','Thêm mới thành công');
						redirect(base_url().'admin/user');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/user');
					}
				}
			}
			$data['active'] = 'user/add';
			$this->load->view('index',$data);
		}
		function edit() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->muser->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Người dùng không hợp lệ');
				redirect(base_url().'admin/user');
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$check_mail = $this->input->post('mail');
				if ($check_mail != $data['info']->u_email) {
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
						$password = $data['info']->u_password;
					}
					$status = ($this->input->post('status')) ? 1 : 0;
					$phone = $this->input->post('phone');
					$address = $this->input->post('address');
					$date = today();
					$set = array('u_name' => $name, 'u_email' => $mail, 'u_password' => $password, 'u_phone' => $phone, 'u_address' => $address, 'u_date' => $date, 'u_status' => $status);
					if($this->muser->update($data['id'], $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						redirect(base_url().'admin/user');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/user');
					}
				}
			}
			$data['active'] = 'user/edit';
			$this->load->view('index',$data);
		}
		function delete() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->muser->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Người dùng không hợp lệ');
				redirect(base_url().'admin/user');
			}
			if($this->muser->delete($data['id'])) {
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/user');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/user');
			}
		}
	}
?>