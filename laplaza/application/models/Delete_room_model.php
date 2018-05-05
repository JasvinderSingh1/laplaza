<?php
Class Delete_room_model extends CI_Model {
	//this function is used to delete room
	public function delete() {

		$path_file = './uploads/';
		$path_file1 = './uploads/files/';
					$room_id = $this->db->escape($this->uri->segment(3));
					$query = $this->db->query("SELECT * FROM rooms WHERE id = $room_id");
					foreach( $query->result() as $row ) {

						if($row->image != '') {
						$file = $row->image;
						unlink($path_file.$file);
						} if($row->gallery0 != '') {
						$file0 = $row->gallery0;
						unlink($path_file1.$file0);
						} if($row->gallery1 != '') {
						$file1 = $row->gallery1;
						unlink($path_file1.$file1);
						} if($row->gallery2 != '') {
						$file2 = $row->gallery2;
						unlink($path_file1.$file2);
						} if($row->gallery3 != '') {
						$file3 = $row->gallery3;
						unlink($path_file1.$file3);
						} if($row->gallery4 != '') {
						$file4 = $row->gallery4;
						unlink($path_file1.$file4);
						} if($row->gallery5 != '') {
						$file5 = $row->gallery5;
						unlink($path_file1.$file5);
						} if($row->gallery6 != '') {
						$file6 = $row->gallery6;
						unlink($path_file1.$file6);
						} if($row->gallery7 != '') {
						$file7 = $row->gallery7;
						unlink($path_file1.$file7);
						} if($row->gallery8 != '') {
						$file8 = $row->gallery8;
						unlink($path_file1.$file8);
						} if($row->gallery9 != '') {
						$file9 = $row->gallery9;
						unlink($path_file1.$file9);
						}
					}

					$this->db->delete('rooms', array('id' => $this->uri->segment(3) ));
	}
}