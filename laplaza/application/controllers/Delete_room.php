<?php

ob_start();//we need to start session in order to access it through CI

Class Delete_room extends CI_Controller {

public function __construct() {
parent::__construct();
}
// Show login page
public function index() {

// load the delete room model
$this->load->model('delete_room_model');


// if no page ID in url
if ($this->uri->segment(3) === FALSE ) {redirect('admin');}

// model delete function
$query = $this->delete_room_model->delete();
$this->load->model('listing_model');
			
$data['allrooms'] = $this->listing_model->load_rooms();
$this->load->view('rooms_html', $data);
}

}
