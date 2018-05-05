<?php

ob_start();//we need to start session in order to access it through CI

Class Add_room extends CI_Controller {

public function __construct() {
parent::__construct();
}
// Show login page
public function index() {

			// empty $msg variable
			$data['msg'] = '';
			
			// set validation rules
			$this->form_validation->set_rules('r_name', 'Room name', 'required');
			$this->form_validation->set_rules('room_no', 'Room No', 'required|numeric');
			$this->form_validation->set_rules('price', 'Price', 'required|numeric');
			$this->form_validation->set_rules('r_description', 'Description', 'required');
			if (empty($_FILES['r_image']['name']))
				{
				$this->form_validation->set_rules('r_image', 'Image', 'required');
				}
			// if passed form validation (ok)
			if ( $this->form_validation->run() !== FALSE ) 
			
			{

			$m = $_FILES['r_image']['name'];
			if ($m !== "")
				{
					$config['upload_path'] = './uploads';                        
					$config['log_threshold'] = 1;
					$config['allowed_types'] = 'jpg|png|jpeg|gif';
					$config['max_size'] = '100000'; // 0 = no file size limit
					//$config['file_name']='smallImage';          
					$config['overwrite'] = false;
					$this->load->library('upload', $config);
					$this->upload->do_upload('r_image');
					$upload_data = $this->upload->data();
					$file_name = $upload_data['file_name'];
				}
			
			$data = array();
			if(!empty($_FILES['userFiles']['name'])){
			$filesCount = count($_FILES['userFiles']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

				$uploadPath = 'uploads/files/';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';
				//$config['max_size']	= '100';
				//$config['max_width'] = '1024';
				//$config['max_height'] = '768';
				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData[$i]['gallery'] = $fileData['file_name'];

				}
			}
		}

			$this->r_name = $this->input->post('r_name');
			$this->room_no = $this->input->post('room_no');
			$this->price = $this->input->post('price');
			$this->featured = $this->input->post('featured');
			$this->description = $this->input->post('r_description');
			$this->image = $file_name;
			
			
			if(!empty($uploadData[0]['gallery'])){
			$this->gallery0 = $uploadData[0]['gallery'];
			} if(!empty($uploadData[1]['gallery'])){
			$this->gallery1 = $uploadData[1]['gallery'];
			} if(!empty($uploadData[2]['gallery'])){
			$this->gallery2 = $uploadData[2]['gallery'];
			} if(!empty($uploadData[3]['gallery'])){
			$this->gallery3 = $uploadData[3]['gallery'];
			} if(!empty($uploadData[4]['gallery'])){
			$this->gallery4 = $uploadData[4]['gallery'];
			} if(!empty($uploadData[5]['gallery'])){
			$this->gallery5 = $uploadData[5]['gallery'];
			} if(!empty($uploadData[6]['gallery'])){
			$this->gallery6 = $uploadData[6]['gallery'];
			} if(!empty($uploadData[7]['gallery'])){
			$this->gallery7 = $uploadData[7]['gallery'];
			} if(!empty($uploadData[8]['gallery'])){
			$this->gallery8 = $uploadData[8]['gallery'];
			} if(!empty($uploadData[9]['gallery'])){
			$this->gallery9 = $uploadData[9]['gallery'];
			}
			// everything is ok Insert now
			$this->db->insert('rooms', $this);

				//$this->res = "<p class='success'>Room created..</p>";
				$data['msg'] = "<p class='success'>Room Created</p>";

			}

			$this->load->view('add_room_html', $data);

}
}