<?php

class InsertCtrl extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('InsertModel');
	}
	function index() {
		//Including validation library
		//$this->load->library('form_validation');

		//$this->form_validation->set_error_delimiters('<div class="error">', '</div>');

		//Validating Name Field
		//$this->form_validation->set_rules('dname', 'Username', 'required|min_length[5]|max_length[15]');

		//Validating Email Field
		//$this->form_validation->set_rules('demail', 'Email', 'required|valid_email');

		//Validating Mobile no. Field
		//$this->form_validation->set_rules('dmobile', 'Mobile No.', 'required|regex_match[/^[0-9]{10}$/]');

		//Validating Address Field
		//$this->form_validation->set_rules('daddress', 'Address', 'required|min_length[10]|max_length[50]');

		//if ($this->form_validation->run() == FALSE) {
			//$this->load->view('insert_view');
		//} else {
			//Setting values for tabel columns
		$data = array(
			'user_fullname' => $this->input->post('fname'),
			'user_phone' => $this->input->post('uphone'),
			'user_email' => $this->input->post('uemail'),
			'user_luckynumber' => $this->input->post('lnum')
		);
		//Transfering data to Model
		$this->InsertModel->form_insert($data);
		// $data['message'] = 'Data Inserted Successfully';
	}

}

?>