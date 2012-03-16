// 4
<?php
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$final_query");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}
?>
