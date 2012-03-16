<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class studie_model extends CI_Model {
	
	function load_classifications($study)
	{
		$this->load->database();
		$query = $this->db->query("
			SELECT * FROM
				programs,
				program_classifications,
				courses
			WHERE
				programs.program_id = '$study'
				AND programs.program_id = program_classifications.program_id
				AND program_classifications.program_id = courses.program_id");
		return $query->result();
	}
	function load_courses($study)
	{
		$this->load->database();
		$query = $this->db->query("SELECT course_name FROM courses WHERE program_id = '$study'");
		return $query->result();
	}
	function load_links($study)
	{
		$this->load->database();
		$query = $this->db->query("SELECT * FROM program_links WHERE program_id = '$study'");
		return $query->result();
	}
}
?>