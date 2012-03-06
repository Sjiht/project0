<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header', array('title' => 'Home'));
		$this->load->view('pages/home');
		$this->load->view('templates/footer');
	}
	public function browse()
	{
		$this->load->view('templates/header', array('title' => 'Browse'));
		$this->load->view('pages/browse');
		$this->load->view('templates/footer');
	}
	public function filter()
	{
		$this->load->view('templates/header', array('title' => 'Filter'));
		$this->load->view('pages/filter');
		$this->load->view('templates/footer');
	}
	public function view()
	{
		$this->load->view('templates/header', array('title' => 'View'));
		$this->load->view('pages/view');
		$this->load->view('templates/footer');
	}
}

?>