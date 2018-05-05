<?php

ob_start();//we need to start session in order to access it through CI

Class Edit_room extends CI_Controller {

public function __construct() {
parent::__construct();
}

public function index() {
	$this->load->model('listing_model');
	$data['msg'] = '';
	$this->form_validation->set_rules('r_name', 'Room name', 'required');
	$this->form_validation->set_rules('room_no', 'Room Number', 'required');
	$this->form_validation->set_rules('price', 'Price', 'required|numeric');
	$this->form_validation->set_rules('r_description', 'Description', 'required');
	
	if ( $this->form_validation->run() !== FALSE )
	{
	$this->listing_model->update_room();
	$data['msg'] = "<p class='success'>Room successfully updated.</p>";
	}
	$data['rooms'] = $this->listing_model->get_room();
	$this->load->view('edit_room_html', $data);

}

}
?>