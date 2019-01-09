<?php defined('BASEPATH') OR exit('No direct script access allowed');

	class Config extends MY_Controller{
		function __construct() {
			parent::__construct();
			$this->load->model('mconfig');
		}
		function index() {
			$data['active'] = 'config/list';
			$result = array();
			$data['list'] = $this->mconfig->get_list($result);
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('index',$data);
		}
		function is_exist($file) {
			return file_exists(FCPATH."site/images".$_FILES[$file]['name']);
		}
		function edit() {
			$data['id'] = $this->uri->rsegment('3');
			$data['info'] = $this->mconfig->get_info($data['id']);
			if(!$data['info']) {
				$this->session->set_flashdata('message','Cấu hình không hợp lệ');
				redirect(base_url().'admin/config');
			}
			if($this->input->post()) {
				$this->form_validation->set_rules('title','Tiêu đề','trim|required');
				$this->form_validation->set_rules('footer','Chân trang','trim|required');
				$this->form_validation->set_rules('adlink','Link quảng cáo','trim|required');
				$this->form_validation->set_rules('hotline','Đường dây nóng','trim|required');
				$this->form_validation->set_rules('facebook','Facebook','trim|required');
				$this->form_validation->set_rules('twitter','Twitter','trim|required');
				$this->form_validation->set_rules('google','Google','trim|required');
				$this->form_validation->set_rules('phone','Điện thoại','trim|required');
				$this->form_validation->set_rules('instagram','Instagram','trim|required');
				$this->form_validation->set_rules('about','Giới thiệu','trim|required');
				$this->form_validation->set_rules('mail','Email','trim|required|valid_email');
				$this->form_validation->set_rules('address','Địa chỉ','trim|required');
				$this->form_validation->set_rules('payment','Phương thức thanh toán','trim|required');
				if($this->form_validation->run()) {
					echo "run";
					$title = $this->input->post('title');
					$footer = $this->input->post('footer');
					$adlink = $this->input->post('adlink');
					$hotline = $this->input->post('hotline');
					$facebook = $this->input->post('facebook');
					$twitter = $this->input->post('twitter');
					$google = $this->input->post('google');
					$phone = $this->input->post('phone');
					$instagram = $this->input->post('instagram');
					$about = $this->input->post('about');
					$mail = $this->input->post('mail');
					$address = $this->input->post('address');
					$payment = $this->input->post('payment');
					$logo = $data['info']->cf_logo;
					$advert = $data['info']->cf_advert;
					$this->load->library('upload_library');
					if (!empty($_FILES['logo']['name'])) {
						if($this->is_exist("logo")) {
							$logo = $_FILES['logo']['name'];
						} else {
							$upload_data1 = $this->upload_library->upload("./site/images","logo");
							if (isset($upload_data1['file_name'])) {
								$logo = $upload_data1['file_name'];
								$path1 = "./site/images/". $data['info']->cf_logo;
								unlink($path1);
							}
						}
					}
					if (!empty($_FILES['advert']['name'])) {
						if($this->is_exist("advert")) {
							$advert = $_FILES['advert']['name'];
						} else {
							$upload_data2 = $this->upload_library->upload("./site/images","advert");
							if (isset($upload_data2['file_name'])) {
								$advert = $upload_data2['file_name'];
								$path2 = "./site/images/". $data['info']->cf_advert;
								unlink($path2);
							}
						}
					}
					$set = array('cf_title' => $title, 'cf_logo' => $logo, 'cf_advert' => $advert, 'cf_adlink' => $adlink, 'cf_footer' => $footer, 'cf_hotline' => $hotline, 'cf_twitter' => $twitter, 'cf_facebook' => $facebook, 'cf_google' => $google, 'cf_instagram' => $instagram, 'cf_phone' => $phone, 'cf_about' => $about, 'cf_email' => $mail, 'cf_address' => $address, 'cf_payment' => $payment);
					if($this->mconfig->update($data['id'], $set)) {
						$this->session->set_flashdata('message','Cập nhật thành công');
						redirect(base_url().'admin/config');
					} else {
						$this->session->set_flashdata('message','Đã có lỗi xảy ra');
						redirect(base_url().'admin/config');
					}
				}
			}
			$data['active'] = 'config/edit';
			$this->load->view('index',$data);
		}
	}
?>