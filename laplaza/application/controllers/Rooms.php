<?php

ob_start();//we need to start session in order to access it through CI

Class Rooms extends CI_Controller {

public function __construct() {
parent::__construct();

}


public function index() {

$this->load->model('listing_model');
			
$data['allrooms'] = $this->listing_model->load_rooms();



		$this->load->view('rooms_html', $data);

}

}
?>