	

<?php
	// get the study_id from the link that was entered
	$study_id = $_GET['study'];
?>

<?php

	// load from database: degree, credits, duration, level
	$this->load->database();
	$query = $this->db->query("SELECT degree, credits, duration, level FROM program_classifications WHERE program_id = '$study_id'");
	foreach ($query->result() as $row)
	{
		$program_degree = $row->degree;
		$program_credits = $row->credits;
		$program_duration = $row->duration;
		$program_level = $row->level;
	}
	
	// load from database: name, summary, faculty_id, lang, langpercentage
	$this->load->database();
	$query = $this->db->query("SELECT name, summary, faculty_id, lang, langpercentage FROM programs WHERE program_id = '$study_id'");
	foreach ($query->result() as $row)
	{
		$program_name = $row->name;
		$program_summary = $row->summary;
		$program_faculty_id = $row->faculty_id;
		$program_lang = $row->lang;
		$program_langpercentage = $row->langpercentage;

	}
?>

<!-- print the program name -->
<h2><?php echo $program_name; ?></h2>

<!-- print the program summary -->
<div id='summary' data-role="page" data-theme="a" data-content-theme="a">

	<?php echo $program_summary; ?>
</div>


<div id='duration'>
	<h3>Taal</h3>
	<?php
		// print the language and the percentage
		echo 'Taal: ' . $program_lang . ' (' . $program_langpercentage . '%)';
	?> 
</div>

<div id='duration'>
	<h3>Studiepunten</h3>
	<?php
		// print the program credits
		echo $program_credits;
	?>
</div>

<div id='courses'>
	<h3>Vakken</h3>
	<?php
	
	// load from database: program_courses
	$this->load->database();
	$query = $this->db->query("SELECT course_name FROM courses WHERE program_id = '$study_id'");
	foreach ($query->result() as $row)
	{
		$program_course = $row->course_name;
		echo $program_course . '<br />';

	}
	?>
</div>

<div id='links'>
	<h3>Extra informatie</h3>
	<?php
	
	// load from database: content_links
	$this->load->database();
	$query = $this->db->query("SELECT * FROM program_links WHERE program_id = '$study_id'");
	foreach ($query->result() as $row)
	{
		$link_summary1 = $row->summary1;
		$link_summary2 = $row->summary2;
		$link_summary3 = $row->summary3;
		$link_weblink = $row->weblink;
		$link_type = $row->type;
		
		// if the link summary is empty
		if ($link_summary1 != 'NULL')
		{
			echo $link_summary1;
		} 
		
		// if the link summary is empty
		if ($link_summary2 != 'NULL')
		{
			echo $link_summary2;
		} 
		
		// if the link summary is empty
		if ($link_summary3 != 'NULL')
		{
			echo $link_summary3;
		}
			echo '<p />';
		
		// if the link summary is movie then embed
		if ($link_type == 'movie')
		{
			$modded_weblink = str_replace('watch?v=', 'embed/', $link_weblink);
			echo '<iframe width="420" height="315" src="' . $modded_weblink . '?rel=0" frameborder="0" allowfullscreen></iframe>';
			echo '<p />';
		}
		// if the weblink is not a movie nor studieadres.nl then print the link
		else if($link_weblink != 'http://studieadres.nl')
		{
			echo $link_weblink;
			echo '<p />';
		}
	
		
	}
	?>
</div>

