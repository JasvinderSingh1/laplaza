<?php

ob_start();//we need to start session in order to access it through CI

Class Book_now extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('listing_model');
		$this->load->library('paypal_lib');
	}
 
	public function index() {
		$data['rooms'] = $this->listing_model->get_room();
		//$data['indate'] = $this->db->escape($this->uri->segment(4));
		//$data['outdate'] = $this->db->escape($this->uri->segment(5));
		$data['indate'] = $this->uri->segment(4);
		$data['outdate'] = $this->uri->segment(5);
		$this->load->view('book_now_html', $data);
	}
	function buy(){
		//Set variables for paypal form
		$returnURL = base_url().'paypal/success'; //payment success url
		$cancelURL = base_url().'paypal/cancel'; //payment cancel url
		$notifyURL = base_url().'paypal/ipn'; //ipn url
		
		$r_name = $this->input->post('r_name');
		$id = $this->input->post('id');
		$price = $this->input->post('price_room');
		$userID = 1; //current user id
		$logo = base_url().'assets/img/logo.png';
		
		$this->paypal_lib->add_field('return', $returnURL);
		$this->paypal_lib->add_field('cancel_return', $cancelURL);
		$this->paypal_lib->add_field('notify_url', $notifyURL);
		$this->paypal_lib->add_field('item_name', $r_name);
		$this->paypal_lib->add_field('custom', $userID);
		$this->paypal_lib->add_field('item_number',  $id);
		$this->paypal_lib->add_field('amount',  $price);		
		$this->paypal_lib->image($logo);
		
		$this->paypal_lib->paypal_auto_form();
	}
}