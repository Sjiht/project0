<?php
	// error handling
	error_reporting(0);
	
	// define the variables
	// get the input from the radiobuttons and checkboxes with global variables
	$profiel = $_POST['profiel'];
	$wis = $_POST['wis'];
	$nat = $_POST['nat'];
	$sch = $_POST['sch'];
	$lat = $_POST['lat'];
	$gr = $_POST['gr'];
	$bio = $_POST['bio'];
	
	// if nothing is selected make a standard selection
	if ($profiel == '' AND $wis == '' AND $nat == '' AND $sch == '' AND $lat == '' AND $gr == '' AND $bio == '') {
		$profiel = 'cm';
		$wis = 'wisa';
		$nat = 'natuurkunde';
		$sch = 'scheikunde';
		$lat = 'latijn';
		$gr = 'grieks';
		$bio = 'biologie';
	}
	
	// make sure the variables always contain something
	$cm = '';
	$em = '';
	$ng = '';
	$nt = '';
	$wisa = '';
	$wisb = '';
	$wisc = '';
	$natuurkunde = '';
	$scheikunde = '';
	$biologie = '';
	$latijn = '';
	$grieks = '';
	$fulltime = '';
	$parttime = '';
	$dual = '';
	
	// make sure that when u press something it stays checked
	if ($profiel == 'cm') {
		$cm = "checked='checked'";
	}
	if ($profiel == 'em') {
		$em = "checked='checked'";
	}
	if ($profiel == 'ng') {
		$ng = "checked='checked'";
	}
	if ($profiel == 'nt') {
		$nt = "checked='checked'";
	}
	if ($wis == 'wisa') {
		$wisa = "checked='checked'";
	}
	if ($wis == 'wisb') {
		$wisb = "checked='checked'";
	}
	if ($wis == 'wisc') {
		$wisc = "checked='checked'";
	}
	if ($nat == 'natuurkunde') {
		$natuurkunde = "checked='checked'";
	}
	if ($sch == 'scheikunde') {
		$scheikunde = "checked='checked'";
	}
	if ($bio == 'biologie') {
		$biologie = "checked='checked'";
	}
	if ($lat == 'latijn') {
		$latijn = "checked='checked'";
	}
	if ($gr == 'grieks') {
		$grieks = "checked='checked'";
	}
	if ($full == 'fulltime') {
		$fulltime = "checked='checked'";
	}
	if ($part == 'parttime') {
		$parttime = "checked='checked'";
	}
	if ($dual == 'dual') {
		$dual = "checked='checked'";
	}
?>

<form action="" method="post">
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Profiel</legend>
		<input type="radio" name="profiel" id="cm" value="cm" <?php echo $cm; ?>  />
		<label for="cm">CM</label>
		<input type="radio" name="profiel" id="em" value="em" <?php echo $em; ?> />
		<label for="em">EM</label>
		<input type="radio" name="profiel" id="ng" value="ng" <?php echo $ng; ?> />
		<label for="ng">NG</label>
		<input type="radio" name="profiel" id="nt" value="nt" <?php echo $nt; ?> />
		<label for="nt">NT</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Wiskunde</legend>
		<input type="radio" name="wis" id="wisa" value="wisa" <?php echo $wisa; ?> />
		<label for="wisa">A</label>
		<input type="radio" name="wis" id="wisb" value="wisb" <?php echo $wisb; ?> />
		<label for="wisb">B</label>
		<input type="radio" name="wis" id="wisc" value="wisc" <?php echo $wisc; ?> />
		<label for="wisc">C</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Andere vakken</legend>
		<input type="checkbox" name="nat" id="natuurkunde" value="natuurkunde" <?php echo $natuurkunde; ?>"/>
		<label for="natuurkunde">Natuurkunde</label>
		<input type="checkbox" name="sch" id="scheikunde" value="scheikunde" <?php echo $scheikunde; ?> />
		<label for="scheikunde">Scheikunde</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<input type="checkbox" name="lat" id="latijn" value="latijn" <?php echo $latijn; ?> />
		<label for="latijn">Latijn</label>
		<input type="checkbox" name="gr" id="grieks" value="grieks" <?php echo $grieks; ?> />
		<label for="grieks">Grieks</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<input type="checkbox" name="bio" id="biologie" value="biologie" <?php echo $biologie; ?> />
		<label for="biologie">Biologie</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Studietype</legend>
		<input type="checkbox" name="full" id="fulltime" value="fulltime" <?php echo $fulltime; ?>"/>
		<label for="fulltime">Voltijd</label>
		<input type="checkbox" name="part" id="parttime" value="parttime" <?php echo $parttime; ?> />
		<label for="parttime">Deeltijd</label>
		<input type="checkbox" name="dual" id="dual" value="dual" <?php echo $dual; ?> />
		<label for="dual">Duaal</label>
	</fieldset>
	<input type="submit" data-theme="a" value="Filter" />
</form>


<br /><br /><br />



<?php

	// if there is no profile selected, look for results in all profiles
	if ($profiel == '') {
	$select_programs = "SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
		FROM programs, admissable_programs, admissable_ng, admissable_nt
		WHERE programs.program_id = admissable_programs.program_id
		AND admissable_programs.program_id = admissable_ng.program_id
		AND	admissable_ng.program_id = admissable_nt.program_id";
	}
	// else only check for results in the selected profile
	else {
		$select_programs = "SELECT programs.program_id AS 'id', programs.name AS 'name', programs.lang AS 'lang' 
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
	}
	
	echo '<ul data-role="listview" data-filter="true" data-filter-placeholder="Voer een zoekterm in..">';
		$this->load->database();
		$query = $this->db->query($select_programs);
		foreach ($query->result() as $row) {
			echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . "</a></li>";
		}
	echo '</ul>';
?>


	<?php
	/*
		if ($profiel == 'cm' OR $profiel == 'em')
		{
			$this->load->database();
			$query = $this->db->query("SELECT programs.program_id AS id, programs.name AS name, programs.lang AS lang FROM programs, admissable_programs
			WHERE (programs.program_id = admissable_programs.program_id)
			AND NOT (admissable_programs.cm = '0' AND admissable_programs.em = '0' AND admissable_programs.ng = '1' AND admissable_programs.nt = '1')
			ORDER BY name ASC");
			foreach ($query->result() as $row)
			{
				echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
			}
		}
		else
		{
			$this->load->database();
			$query = $this->db->query("SELECT programs.program_id AS id, programs.name AS name, programs.lang AS lang FROM programs, admissable_programs
			WHERE programs.program_id = admissable_programs.program_id ORDER BY name ASC");
			foreach ($query->result() as $row)
			{
				echo "<li><a href='/view?study=" . $row->id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
			}
		}
	 */
	?>
