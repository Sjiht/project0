<?php

class studies_model extends CI_Model {
	
	function bachelor_studies($profiel, $wis, $nat, $sch, $lat, $gr, $bio, $time)
	{
		// only check for results in the selected profile
		$select_programs = "SELECT programs.program_id AS 'id', programs.name AS 'name' 
		FROM programs, admissable_programs, admissable_" . $profiel . "
		WHERE programs.program_id = admissable_programs.program_id
		AND admissable_programs.program_id = admissable_" . $profiel . ".program_id";
		
		// when u select wis A make sure results are shown that do not contain wiskunde B as admissable program
		if ($wis == 'wisa') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%wiskunde b%')";
		}
		
		// when wis C is selected make sure results are shown that does not have wiskunde A and wiskunde B as an 
		// admissable program
		if ($wis == 'wisc') { 
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%wiskunde a%')
			AND (admissable_" . $profiel . ".subject NOT LIKE '%wiskunde b%')";
		}
		
		// latijn or grieks do never appear alone, meaning that in the database it is always coupled with each other
		// when latijn and grieks are both not selected make sure no results are shown that have those two as admissable programs
		if ($lat != 'latijn' AND $gr != 'grieks') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%lat%')
			AND (admissable_" . $profiel . ".subject NOT LIKE '%gr%')";
		}
		
		// scheikunde does never appear alone, meaning that in the database it is always coupled with natuurkunde
		// when natuurkunde and scheikunde are both not selected make sure no results appear that has those two
		// as an admissable program
		// this is necessary because it is possible that you want something that contains natuurkunde but not scheikunde
		if ($nat != 'natuurkunde' AND $sch != 'scheikunde') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%nat%')
			AND (admissable_" . $profiel . ".subject NOT LIKE '%sch%')";
		}
		
		// when natuurkunde or scheikunde is not selected do not select results that has natuurkunde as admissable program
		if ($nat != 'natuurkunde' and $sch == 'scheikunde') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%natuurkunde%')";
		}
		
		if ($sch != 'scheikunde') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%+ scheikunde%')";
		}
		
		// if biologie is not selected make sure no results appear that have biologie as admissable program
		if ($bio != 'biologie') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".subject NOT LIKE '%bio%')";
		}
		
		if ($time == 'fulltime') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".program_id NOT LIKE '%part%')
			AND (admissable_" . $profiel . ".program_id NOT LIKE '%dual%')";
		}
		if ($time == 'parttime') {
			$select_programs = $select_programs . "
			AND (admissable_" . $profiel . ".program_id LIKE '%part%')";
		}
		
		$select_programs = $select_programs . "
			ORDER BY name ASC";
		
		$this->load->database();
		$query = $this->db->query($select_programs);
		return $query->result();
	}
}

?>