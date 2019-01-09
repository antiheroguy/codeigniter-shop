<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Category extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mcategory');
		}

		function index() {
			$data['active'] = 'category/list';
			$result = array();
			$data['list'] = $this->mcategory->get_list($result);
			foreach ($data['list'] as $key => $value) {
				if ($value->c_parent != 0) {
					$input['where'] = array('c_id' => $value->c_parent);
					$value->parent_name = $this->mcategory->get_row($input)->c_name;
				} else {
					$value->parent_name = "Không có";
				}
			}
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}

		function check_position() {
			$parent = $this->input->post('parent');
			$position = $this->input->post('position');
			$input['where'] = array('c_parent' => $parent,'c_position' => $position);
			if($this->mcategory->get_list($input)) {
				$this->session->set_flashdata('dup','Vị trí bị trùng');
				return false;
			} return true;
		}

		function add() {
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$this->form_validation->set_rules('position','Vị trí','trim|required|callback_check_position');
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$parent = $this->input->post('parent');
					$view = $this->input->post('view');
					$link = ($this->input->post('link')) ? $this->input->post('link') : "";
					$position = $this->input->post('position');
					$set = array('c_name' => $name, 'c_parent' => $parent, 'c_view' => $view, 'c_link' => $link, 'c_position' => $position, 'c_status' => 1);
					if($this->mcategory->create($set)) {
						$this->session->set_flashdata('message','Thêm mới thành công');
						redirect(base_url().'admin/category');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/category');
					}
				}
			}
			$show['where'] = array('c_parent' => 0);
			$data['parent'] = $this->mcategory->get_list($show);
			$data['active'] = 'category/add';
			$this->load->view('index',$data);
		}

		function edit() {
			$data['id'] = $this->uri->rsegment('3');
			$data['info'] = $this->mcategory->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Danh mục không hợp lệ');
				redirect(base_url().'admin/category');
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				if ($this->input->post('position') == $data['info']->c_position) {
					$position = $this->input->post('position');
				} else {
					$this->form_validation->set_rules('position','Vị trí','trim|required|callback_check_position');
				}
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$parent = $this->input->post('parent');
					$view = $this->input->post('view');
					$link = ($this->input->post('link')) ? $this->input->post('link') : "";
					$position = $this->input->post('position');
					$status = ($this->input->post('status')) ? 1 : 0;
					$set = array('c_name' => $name, 'c_parent' => $parent, 'c_view' => $view, 'c_link' => $link, 'c_position' => $position, 'c_status' => $status);
					if($this->mcategory->update($data['id'], $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						redirect(base_url().'admin/category');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/category');
					}
				}
			}
			$show['where'] = array('c_parent' => 0, 'c_id <>' => $data['info']->c_id, 'c_view' => 'category');
			$data['parent'] = $this->mcategory->get_list($show);
			$data['active'] = 'category/edit';
			$this->load->view('index',$data);
		}

		function delete() {
			$this->load->model('mproduct');
			$data['id'] = intval($this->uri->rsegment('3'));
			$product = $this->mproduct->get_info_rule(array("c_id" => $data['id'], 'c_id' ));
			if ($product) {
				$this->session->set_flashdata('message','Danh mục có chứa sản phẩm, không thể xóa');
				redirect(base_url().'admin/category');
			}
			$data['info'] = $this->mcategory->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Danh mục không hợp lệ');
				redirect(base_url().'admin/category');
			}
			if($this->mcategory->delete($data['id'])) {
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/category');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/category');
			}
		}

	}
?>