<?php

ob_start();//we need to start session in order to access it through CI

Class Contact extends CI_Controller {

public function __construct() {
parent::__construct();
	$this->load->library('email');
	
}

public function index() {
	$data['msg'] = '';
	$this->load->view('contact_html', $data);

}

public function send_mail() {
	$data['msg'] = '';
	// set validation rules
	$this->form_validation->set_rules('your_name', 'Your name', 'required');
	$this->form_validation->set_rules('your_phone', 'Your phone', 'required|numeric');
	$this->form_validation->set_rules('your_email', 'Youe Email', 'required');
	$this->form_validation->set_rules('message', 'Message', 'required');

	if ( $this->form_validation->run() !== FALSE ) 
	{
	$your_name = $this->input->post('your_name');
	$your_phone = $this->input->post('your_phone');
	$your_email = $this->input->post('your_email');
	$message = $this->input->post('message');
	

	$config['protocol'] = 'mail';
	$config['charset'] = 'iso-8859-1';
	$config['wordwrap'] = TRUE;
	$config['mailtype'] = 'html';


	$this->email->initialize($config);

	$this->email->from('contact@laplaza.com', $your_name);
	$this->email->to('jasvinder@enablerswebsolutions.com');
	$this->email->subject('Laplaza Contact Form');
	
	$message = "From: $your_name [<a href='$your_email'>$your_email</a>]<br>Phone: $your_phone<br>Message: $message<br><br>-- <br>This e-mail was sent from a contact form on Hotel Laplaza (http://tutor.ewsdev.in)
";

	$this->email->message($message);

	$this->email->send();

	echo $this->email->print_debugger();
	$data['msg'] = "<div class='alert alert-success' role='alert'><strong>Thank you!</strong> We will be in touch with you as soon as possible.</div>";

	}

	$this->load->view('contact_html', $data);

}
}
?>