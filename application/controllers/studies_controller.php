<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class studies_controller extends CI_Controller {
	public function index() {
		$this->load->model('studies_model');
		
		if ($this->input->get('profiel') == '') {
			$lijst_studies = $this->studies_model->bachelor_studies(
				'cm',
				'wisa',
				'natuurkunde',
				'scheikunde',
				'latijn',
				'grieks',
				'biologie',
				'fulltime'
			);
		}
		else {
			$lijst_studies = $this->studies_model->bachelor_studies(
				$this->input->get('profiel', TRUE),
				$this->input->get('wis', TRUE),
				$this->input->get('nat', TRUE),
				$this->input->get('sch', TRUE),
				$this->input->get('lat', TRUE),
				$this->input->get('gr', TRUE),
				$this->input->get('bio', TRUE),
				$this->input->get('time', TRUE)
			);
		}
		
		$this->load->view('templates/header', array('title' => 'Home'));
		
		if ($this->input->get('profiel') == '') {
			$this->load->view('pages/studies', array(
				'title' => 'Bekijk studie',
				'lijst_studies' => $lijst_studies,
				'profiel' => 'cm',
				'wis' => 'wisa',
				'nat' => 'natuurkunde',
				'sch' => 'scheikunde',
				'lat' => 'latijn',
				'gr' => 'grieks',
				'bio' => 'biologie',
				'time' => 'fulltime'
				)
			);
		}
		else {
			$this->load->view('pages/studies', array(
				'title' => 'Bekijk studie',
				'lijst_studies' => $lijst_studies,
				'profiel' => $this->input->get('profiel', TRUE),
				'wis' => $this->input->get('wis', TRUE),
				'nat' => $this->input->get('nat', TRUE),
				'sch' => $this->input->get('sch', TRUE),
				'lat' => $this->input->get('lat', TRUE),
				'gr' => $this->input->get('gr', TRUE),
				'bio' => $this->input->get('bio', TRUE),
				'time' => $this->input->get('time', TRUE)
				)
			);
		}
		
		$this->load->view('templates/footer');
	}
}
?>