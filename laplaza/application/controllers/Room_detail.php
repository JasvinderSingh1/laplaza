<?php

ob_start();//we need to start session in order to access it through CI

Class Room_detail extends CI_Controller {

public function __construct() {
parent::__construct();
}

public function index() {
	$this->load->model('listing_model');
	$data['rooms'] = $this->listing_model->get_room();
	$this->load->view('room_detail_html', $data);

}

}
?>