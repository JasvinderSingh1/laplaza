<?php

ob_start();//we need to start session in order to access it through CI

Class Bookings extends CI_Controller {

	public function __construct() {
	parent::__construct();

	$this->load->model('search_model');
		}

	public function index() {
	$data['indate'] = '';
	$data['outdate'] = '';
	$this->form_validation->set_rules('in_date', 'Room name', 'required');
		if ( $this->form_validation->run() !== FALSE ) 
		{

		$in_date = $this->input->post('in_date');
		$out_date = $this->input->post('out_date');
		//$condition3 = "check_in_date <=" . "'" . $out_date . "' AND " . "check_out_date >=" . "'" . $in_date . "'";
		//$this->db->select('*');
		//$this->db->from('rooms AS r');
		//$this->db->join('booking AS b', 'b.room_id = r.id', 'inner');
		//$this->db->or_where($condition3);
		//$query =  $this->db->get();
		//$data['allrooms'] = $query->result();
		$sql = "SELECT *
				FROM rooms
				WHERE room_no NOT IN (
				SELECT DISTINCT room_no
				FROM reservation
				WHERE check_in <= '$out_date' AND check_out >= '$in_date')";
		
		$query = $this->db->query($sql);
		$data['allrooms'] = $query->result();
		$data['indate'] = $in_date;
		$data['outdate'] = $out_date;
		}
		$this->load->view('bookings_html', $data);

	}

	public function search() {
		$this->form_validation->set_rules('in_date', 'Room name', 'required');
		if ( $this->form_validation->run() !== FALSE ) 
		{

		$in_date = $this->input->post('in_date');
		$out_date = $this->input->post('out_date');
		//$condition3 = "check_in_date <=" . "'" . $out_date . "' AND " . "check_out_date >=" . "'" . $in_date . "'";
		//$this->db->select('*');
		//$this->db->from('rooms AS r');
		//$this->db->join('booking AS b', 'b.room_id = r.id', 'inner');
		//$this->db->or_where($condition3);
		//$query =  $this->db->get();
		//$data['allrooms'] = $query->result();
		$sql = "SELECT *
				FROM rooms
				WHERE room_no NOT IN (
				SELECT DISTINCT room_no
				FROM reservation
				WHERE check_in <= '$out_date' AND check_out >= '$in_date')";
		
		$query = $this->db->query($sql);
		$data['allrooms'] = $query->result();
		$data['indate'] = $in_date;
		$data['outdate'] = $out_date;
		}
		$this->load->view('bookings_html', $data);
	}
}