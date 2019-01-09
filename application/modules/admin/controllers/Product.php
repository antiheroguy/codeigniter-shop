<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Product extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mproduct');
			$this->load->model('mcategory');
			$this->load->helper('MY_date_helper');
		}
		function index() {
			$data['active'] = 'product/list';
			$result = array();
			$data['list'] = $this->mproduct->john('category','c_id');
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}
		function is_exist($file) {
			return file_exists(FCPATH."upload/".$_FILES[$file]['name']);
		}
		function add() {
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$this->form_validation->set_rules('price','Giá','trim|required');
				$this->form_validation->set_rules('category','Danh mục','required');
				if (!$this->input->post('category')) {
					$this->session->set_flashdata('message','Vui lòng chọn danh mục');
				}
				$this->form_validation->set_rules('detail','Mô tả','trim|required');
				$this->form_validation->set_rules('review','Đánh giá','trim|required');
				if (empty($_FILES['image']['name']))
				{
				    $this->form_validation->set_rules('image', 'Ảnh đại diện', 'required")');
				}
				if (empty($_FILES['image_1']['name']))
				{
				    $this->form_validation->set_rules('image_1', 'Ảnh thu nhỏ 1', 'required")');
				}
				if (empty($_FILES['image_2']['name']))
				{
				    $this->form_validation->set_rules('image_2', 'Ảnh thu nhỏ 2', 'required")');
				}
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$category = $this->input->post('category');
					$price = $this->input->post('price');
					$discount = ($this->input->post('discount')) ? $this->input->post('discount') : 0;
					$detail = $this->input->post('detail');
					$review = $this->input->post('review');
					$date = today();
					$this->load->library('upload_library');
					$image = $_FILES['image']['name'];
					$image_list = array(0 => $_FILES['image_1']['name'], 1 => $_FILES['image_2']['name']);

					if(!$this->is_exist("image")) {
						$upload_data = $this->upload_library->upload("./upload","image");
						if (isset($upload_data['file_name'])) {
							$image = $upload_data['file_name'];
						}
					}

					if(!$this->is_exist("image_1")) {
						$upload_data1 = $this->upload_library->upload("./upload","image_1");
						if (isset($upload_data1['file_name'])) {
							$image_list[0] = $upload_data1['file_name'];
						}
					}

					if(!$this->is_exist("image_2")) {
						$upload_data1 = $this->upload_library->upload("./upload","image_2");
						if (isset($upload_data2['file_name'])) {
							$image_list[1] = $upload_data2['file_name'];
						}
					}
					$image_list = json_encode($image_list);
					$set = array('p_name' => $name, 'p_image' => $image, 'p_price' => $price, 'p_discount' => $discount, 'p_detail' => $detail, 'p_review' => $review, 'p_imagelist' => $image_list, 'c_id' => $category, 'p_date' => $date, 'p_count' => 0, 'p_status' => 1);
					if($this->mproduct->create($set)) {
						$this->session->set_flashdata('message','Thêm mới thành công');
						redirect(base_url().'admin/product');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/product');
					}
				}
			}
			$data['message'] = $this->session->flashdata('message');
			$data['active'] = 'product/add';
			$result = array();
			$data['category'] = $this->mcategory->get_list($result);
			$this->load->view('index',$data);
		}
		function edit() {
			$data['id'] = $this->uri->rsegment('3');
			$data['info'] = $this->mproduct->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Sản phẩm không hợp lệ');
				redirect(base_url().'admin/product');
			}
			$input['where'] = array('c_id' => $data['info']->c_id);
			$data['cat'] = $this->mcategory->get_list($input);
			$img = json_decode($data['info']->p_imagelist);
			if($this->input->post()) {
				$this->form_validation->set_rules('name','Tên','trim|required');
				$this->form_validation->set_rules('price','Giá','trim|required');
				// $this->form_validation->set_rules('category','Danh mục','trim|required');
				$this->form_validation->set_rules('detail','Mô tả','trim|required');
				$this->form_validation->set_rules('review','Đánh giá','trim|required');
				if($this->form_validation->run()) {
					$name = $this->input->post('name');
					$category = ($this->input->post('category')) ? $this->input->post('category') : $data['cat'][0]->c_id;
					$price = $this->input->post('price');
					$discount = ($this->input->post('discount')) ? $this->input->post('discount') : 0;
					$status = ($this->input->post('status')) ? 1 : 0;
					$detail = $this->input->post('detail');
					$review = $this->input->post('review');
					$date = today();
					$this->load->library('upload_library');
					$image = $data['info']->p_image;
					$image_list = array(0 => $img[0], 1 => $img[1]);
					if (!empty($_FILES['image']['name'])) {
						if($this->is_exist("image")) {
							$image = $_FILES['image']['name'];
						} else {
							$upload_data = $this->upload_library->upload("./upload","image");
							if (isset($upload_data['file_name'])) {
								$image = $upload_data['file_name'];
								$path = "./upload/". $data['info']->p_image;
								unlink($path);
							}
						}
					}

					if (!empty($_FILES['image_1']['name'])) {
						if($this->is_exist("image_1")) {
							$image_list[0] = $_FILES['image_1']['name'];
						} else {
							$upload_data1 = $this->upload_library->upload("./upload","image_1");
							if (isset($upload_data1['file_name'])) {
								$image_list[0] = $upload_data1['file_name'];
								$path_1 = "./upload/". $img[0];
								unlink($path_1);
							}
						}
					}

					if (!empty($_FILES['image_2']['name'])) {
						if($this->is_exist("image_2")) {
							$image_list[1] = $_FILES['image_2']['name'];
						} else {
							$upload_data2 = $this->upload_library->upload("./upload","image_2");
							if (isset($upload_data2['file_name'])) {
								$image_list[1] = $upload_data2['file_name'];
								$path_2 = "./upload/". $img[1];
								unlink($path_2);
							}
						}
					}

					$image_list = json_encode($image_list);
					$set = array('p_name' => $name, 'p_image' => $image, 'p_price' => $price, 'p_discount' => $discount, 'p_detail' => $detail, 'p_review' => $review, 'p_imagelist' => $image_list, 'c_id' => $category, 'p_date' => $date, 'p_status' => $status);
					if($this->mproduct->update($data['id'],$set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						redirect(base_url().'admin/product');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/product');
					}
				}
			}
			$data['active'] = 'product/edit';
			$result = array();
			$data['category'] = $this->mcategory->get_list($result);
			$this->load->view('index',$data);
		}
		function delete() {
			$data['id'] = intval($this->uri->rsegment('3'));
			$data['info'] = $this->mproduct->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Danh mục không hợp lệ');
				redirect(base_url().'admin/product');
			}
			$img = json_decode($data['info']->p_imagelist);
			if($this->mproduct->delete($data['id'])) {
				$path = "./upload/". $data['info']->p_image;
				unlink($path);
				$path1 = "./upload/". $img[0];
				unlink($path1);
				$path2 = "./upload/". $img[1];
				unlink($path2);
				$this->session->set_flashdata('message','Xóa thành công');
				redirect(base_url().'admin/product');
			} else {
				$this->session->set_flashdata('message','Đã có lỗi xảy ra');
				redirect(base_url().'admin/product');
			}
		}
	}
?>