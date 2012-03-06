<?php
// check which buttons are pressed
// then proceed to load the varables that are pressed
// 1
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where1");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 2
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where2");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 3
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where3");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 4
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where4");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 5
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where5");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 6
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where6");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 7
if  ($wis == 'wisa' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where7");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}
// 8
if  ($wis == 'wisa' && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where8");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 9
if  ($wis == 'wisa' && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where9");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 10
if  ($wis == 'wisa' && 
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where10");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 11
if  ($wis == 'wisa' && 
	$nat != 'natuurkunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where11");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 12
if  ($wis == 'wisa' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where12");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 13
if  ($wis == 'wisa' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where13");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 14
if  ($wis == 'wisa' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where14");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 15
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where15");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 16
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where16");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 17
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where17");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 18
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where18");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 19
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where19");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 20
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where20");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 21
if  ($wis == 'wisc' && 
	($lat != 'latijn' OR $gr != 'grieks') && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where21");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 22
if  ($wis == 'wisc' && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where22");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 23
if  ($wis == 'wisc' && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where23");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}


// 24
if  ($wis == 'wisc' && 
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where24");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 25
if  ($wis == 'wisc' && 
	$nat != 'natuurkunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where25");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 26
if  ($wis == 'wisc' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where26");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 27
if  ($wis == 'wisc' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where27");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 28
if  ($wis == 'wisc' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where28");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 29
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where29");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 30
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where30");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 31
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where31");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 32
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where32");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 33
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where33");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 34
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where34");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 35
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where35");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 36
if  (
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where36");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 37
if  (
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where37");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 38
if  (
	$nat != 'natuurkunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where38");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 39
if  (
	$nat != 'natuurkunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where39");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 40
if  (
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where40");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 41
if  (
	$sch != 'scheikunde' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where41");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 42
if  (
	$bio != 'biologie' && 
	($profiel == 'cm' OR $profiel == 'em') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where42");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 43
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where43");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 44
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where44");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 45
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$nat != 'natuurkunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where45");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 46
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where46");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 47
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where47");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 48
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where48");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 49
if  (
	($lat != 'latijn' OR $gr != 'grieks') && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where49");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 50
if  (
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where50");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 51
if  (
	$nat != 'natuurkunde' && 
	$sch != 'scheikunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where51");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 52
if  (
	$nat != 'natuurkunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where52");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 53
if  (
	$nat != 'natuurkunde' && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where53");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 54
if  (
	$sch != 'scheikunde' && 
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where54");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 55
if  (
	$sch != 'scheikunde' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where55");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}

// 56
if  (
	$bio != 'biologie' && 
	($profiel == 'ng' OR $profiel == 'nt') )
{
	$this->load->database();
	$query = $this->db->query("SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_cm, admissable_em, admissable_ng, admissable_nt WHERE
		$where56");
	foreach ($query->result() as $row)
	{
		echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
	}
}
?>