<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Slide extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mslide');
		}
		function index() {
			$data['active'] = 'slide/list';
			$result	= array();
			$data['list'] = $this->mslide->get_list($result);
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}
		function check_position() {
			$position = $this->input->post('position');
			$input['where'] = array('s_position' => $position);
			if($this->mslide->get_list($input)) {
				$this->session->set_flashdata('dup','Vị trí bị trùng');
				return false;
			} return true;
		}
		function is_exist($file) {
			return file_exists(FCPATH."site/images/".$_FILES[$file]['name']);
		}
		function add() {
			if($this->input->post()) {
				$this->form_validation->set_rules('title','Tiêu đề','trim|required');
				$this->form_validation->set_rules('link','Liên kết','trim|required');
				$this->form_validation->set_rules('position','Vị trí','trim|required|callback_check_position');
				if (empty($_FILES['image']['name'])) {
				    $this->form_validation->set_rules('image', 'Ảnh', 'required")');
				}
				if($this->form_validation->run()) {
					$title = $this->input->post('title');
					$link = $this->input->post('link');
					$position = $this->input->post('position');
					$image = $_FILES['image']['name'];
					$this->load->library('upload_library');
					if(!$this->is_exist("image")) {
						$upload_data = $this->upload_library->upload("./site/images","image");
						if (isset($upload_data['file_name'])) {
							$image = $upload_data['file_name'];
						}
					}
					$set = array('s_name' => $image, 's_link' => $link, 's_title' => $title, 's_position' => $position, 's_status' => 1);
					if($this->mslide->create($set)) {
						$this->session->set_flashdata('message','Thêm mới thành công');
							redirect(base_url().'admin/slide');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
					}
				}
			}
			$data['active'] = 'slide/add';
			$this->load->view('index',$data);
		}
		function edit() {
			$data['id'] = $this->uri->rsegment('3');
			$data['info'] = $this->mslide->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Sản phẩm không hợp lệ');
				redirect(base_url().'admin/slide');
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('title','Tiêu đề','trim|required');
				$this->form_validation->set_rules('link','Liên kết','trim|required');
				$check_position = $this->input->post('position');
				if ($check_position != $data['info']->s_position) {
					$this->form_validation->set_rules('position','Vị trí','trim|required|callback_check_position');
				}
				if($this->form_validation->run()) {
					$title = $this->input->post('title');
					$link = $this->input->post('link');
					$position = $this->input->post('position');
					$status = ($this->input->post('status')) ? 1 : 0;
					$image = $data['info']->s_name;
					$this->load->library('upload_library');
					if (!empty($_FILES['image']['name'])) {
						if($this->is_exist("image")) {
							$image = $_FILES['image']['name'];
						} else {
							$upload_data = $this->upload_library->upload("./site/images","image");
							if (isset($upload_data['file_name'])) {
								$image = $upload_data['file_name'];
								$path = "./site/images/". $data['info']->s_name;
								unlink($path);
							}
						}
					}
					$set = array('s_name' => $image, 's_link' => $link, 's_title' => $title, 's_position' => $position, 's_status' => $status);
					if($this->mslide->update($data['id'], $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
							redirect(base_url().'admin/slide');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
					}
				}
			}
			$data['active'] = 'slide/edit';
			$this->load->view('index',$data);
		}
		function delete() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->mslide->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Ảnh không hợp lệ');
				redirect(base_url().'admin/slide');
			}
			if($this->mslide->delete($data['id'])) {
				$path = "./site/images/". $data['info']->s_name;
				unlink($path);
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/slide');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/slide');
			}
		}
	}
?>