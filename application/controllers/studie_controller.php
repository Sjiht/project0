<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studie_controller extends CI_Controller {

	public function index() {
		$this->load->model('studie_model');
		$classifications = $this->studie_model->load_classifications($this->input->get('study', TRUE));
		$courses = $this->studie_model->load_courses($this->input->get('study', TRUE));
		$links = $this->studie_model->load_links($this->input->get('study', TRUE));
		
		$this->load->view('templates/header', array('title' => 'Bekijk studie'));
		$this->load->view('pages/studie', array(
			'classifications' => $classifications,
			'names' => $names,
			'courses' => $courses,
			'links' => $links
			)
		);
		$this->load->view('templates/footer');
	}
}

?>