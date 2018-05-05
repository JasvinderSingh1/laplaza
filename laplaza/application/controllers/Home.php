<?php

ob_start();//we need to start session in order to access it through CI

Class Home extends CI_Controller {

public function __construct() {
parent::__construct();
}
// Show login page
public function index() {

$this->load->model('listing_model');
			
$data['allrooms'] = $this->listing_model->load_rooms_featured();
$this->load->view('home_html', $data);



}
}

?>