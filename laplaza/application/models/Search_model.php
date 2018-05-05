<?php
Class Search_model extends CI_Model {
	//this function is used to load listing in room page in backend
		public function Search_room($data) {
		
		$condition = "check_in_date <" . "'" . $data['out_date'] . "' AND " . "check_in_date >" . "'" . $data['in_date'] . "'";
		$this->db->select('*');
		$this->db->from('booking AS b');// I use aliasing make joins easier
		$this->db->join('rooms AS r', 'b.room_no = r.room_no');
		$this->db->where($condition);
		$query =  $this->db->get();
		return $query -> result();
	}
}