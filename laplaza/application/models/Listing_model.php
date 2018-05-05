<?php
Class Listing_model extends CI_Model {
	//this function is used to load listing in room page in backend
		public function load_rooms() {

		$query = $this->db->get('rooms');
		if ( $query->num_rows() > 0 ) {
			return $query->result();			
			}
		else {
			return false;
			}	
		}
		//this function is used to load listing of featured rooms in front page
		public function load_rooms_featured() {

		$query = $this->db->get_where('rooms', array('featured' => 'yes'));
		if ( $query->num_rows() > 0 ) {
			return $query->result();			
			}
		else {
			return false;
			}	
		}

	// this function is used to display details of selected room in edit page in backend
	public function get_room() {
		
		$room_id = $this->db->escape($this->uri->segment(3));
		$query = $this->db->query("SELECT * FROM rooms WHERE id = $room_id");
		return $query->result();
		}
		
	// this function is used to update details of room in edit page in backend
	public function  update_room() {
		
			$config['upload_path'] = './upload';                        
			$config['log_threshold'] = 1;
			$config['allowed_types'] = 'jpg|png|jpeg|gif';
			$config['max_size'] = '100000';         
			$config['overwrite'] = false;
			$this->load->library('upload', $config);

			$m = $_FILES['r_image']['name'];

		$room_id = $this->uri->segment(3);
		$data = array(
		'r_name' => $this->input->post('r_name'),
		'room_no' => $this->input->post('room_no'),
		'price' => $this->input->post('price'),
		'featured' => $this->input->post('featured'),
		'description' => $this->input->post('r_description')
		);

		if ($m ==""  ) {
		    $data['image'] = $this->input->post('r_image1');
		}
		else {
					$path_file = './uploads/';
					$file1 = $this->input->post('r_image1');
					unlink($path_file.$file1);
					$uploadPath1 = './uploads/';
					$config['upload_path'] = $uploadPath1;                  
					$config['log_threshold'] = 1;
					$config['allowed_types'] = '*';
					$config['max_size'] = '100000';         
					$config['overwrite'] = false;
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('r_image')) {
					$upload_data = $this->upload->data();
					$file_name1 = $upload_data['file_name'];
					$data['image'] = $file_name1;
					}
				}
		$n = $_FILES['userFiles']['name'];
		if ($n ==""  ) {
		//if (!empty($_FILES['userFiles']['name'])) {
			$filesCount = count($_FILES['userFiles']['name']);
			for($i = 0; $i < $filesCount; $i++){
				$_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
				$_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
				$_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
				$_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
				$_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];
				$uploadPath = 'uploads/files';
				$config['upload_path'] = $uploadPath;
				$config['allowed_types'] = 'gif|jpg|png';				
				$this->load->library('upload', $config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('userFile')){
					$fileData = $this->upload->data();
					$uploadData[$i]['gallery'] = $fileData['file_name'];
				}
			}
			if(!empty($uploadData[0]['gallery'])){
			$data['gallery0'] = $uploadData[0]['gallery'];
			} if(!empty($uploadData[1]['gallery'])){
			$data['gallery1'] = $uploadData[1]['gallery'];
			} if(!empty($uploadData[2]['gallery'])){
			$data['gallery2'] = $uploadData[2]['gallery'];
			} if(!empty($uploadData[3]['gallery'])){
			$data['gallery3'] = $uploadData[3]['gallery'];
			} if(!empty($uploadData[4]['gallery'])){
			$data['gallery4'] = $uploadData[4]['gallery'];
			} if(!empty($uploadData[5]['gallery'])){
			$data['gallery5'] = $uploadData[5]['gallery'];
			} if(!empty($uploadData[6]['gallery'])){
			$data['gallery6'] = $uploadData[6]['gallery'];
			} if(!empty($uploadData[7]['gallery'])){
			$data['gallery7'] = $uploadData[7]['gallery'];
			} if(!empty($uploadData[8]['gallery'])){
			$data['gallery8'] = $uploadData[8]['gallery'];
			} if(!empty($uploadData[9]['gallery'])){
			$data['gallery9'] = $uploadData[9]['gallery'];
			}
			$path_file = './uploads/files/';
			if($this->input->post('gallery00')) {
			$file0 = $this->input->post('gallery00');
			unlink($path_file.$file0);
			} if($this->input->post('gallery11')) {
			$file1 = $this->input->post('gallery11');
			unlink($path_file.$file1);
			} if($this->input->post('gallery22')) {
			$file2 = $this->input->post('gallery22');
			unlink($path_file.$file2);
			} if($this->input->post('gallery33')) {
			$file3 = $this->input->post('gallery33');
			unlink($path_file.$file3);
			} if($this->input->post('gallery44')) {
			$file4 = $this->input->post('gallery44');
			unlink($path_file.$file4);
			} if($this->input->post('gallery55')) {
			$file5 = $this->input->post('gallery55');
			unlink($path_file.$file5);
			} if($this->input->post('gallery66')) {
			$file6 = $this->input->post('gallery66');
			unlink($path_file.$file6);
			} if($this->input->post('gallery77')) {
			$file7 = $this->input->post('gallery77');
			unlink($path_file.$file7);
			} if($this->input->post('gallery88')) {
			$file8 = $this->input->post('gallery88');
			unlink($path_file.$file8);
			} if($this->input->post('gallery99')) {
			$file9 = $this->input->post('gallery99');
			unlink($path_file.$file9);
			}
		}
		else {	
			
			$data['gallery0'] = $this->input->post('gallery00');
			$data['gallery1'] = $this->input->post('gallery11');
			$data['gallery2'] = $this->input->post('gallery22');
			$data['gallery3'] = $this->input->post('gallery33');
			$data['gallery4'] = $this->input->post('gallery44');
			$data['gallery5'] = $this->input->post('gallery55');
			$data['gallery6'] = $this->input->post('gallery66');
			$data['gallery7'] = $this->input->post('gallery77');
			$data['gallery8'] = $this->input->post('gallery88');
			$data['gallery9'] = $this->input->post('gallery99');
		}
		$this->db->where('id', $room_id);
		$this->db->update('rooms', $data);
		}
}

