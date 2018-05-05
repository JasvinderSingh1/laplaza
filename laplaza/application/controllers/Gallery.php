<?php

ob_start();//we need to start session in order to access it through CI

Class Gallery extends CI_Controller {

public function __construct() {
parent::__construct();	
}

public function index() {
	$this->load->view('gallery_html');

}
}