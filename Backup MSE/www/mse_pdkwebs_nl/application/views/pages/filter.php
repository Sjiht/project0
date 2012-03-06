<?php
	$wis = $_GET['wis'];
	$nat = $_GET['nat'];
	$sch = $_GET['sch'];
	$lat = $_GET['lat'];
	$gr = $_GET['gr'];
	$bio = $_GET['bio'];
	
	$cm = '';
	$em = '';
	$ng = '';
	$nt = '';
	$wisa = '';
	$wisb = '';
	$wisc = '';
	$wisd = '';
	$natuurkunde = '';
	$scheikunde = '';
	$biologie = '';
	$latijn = '';
	$grieks = '';
	$fulltime = '';
	$parttime = '';
	$dual = '';
	$profiel = $_GET['profiel'];
	
	if ($profiel == 'cm')
	{
		$cm = "checked='checked'";
	}
	if ($profiel == 'em')
	{
		$em = "checked='checked'";
	}
	if ($profiel == 'ng')
	{
		$ng = "checked='checked'";
	}
	if ($profiel == 'nt')
	{
		$nt = "checked='checked'";
	}
	if ($_GET['wis'] == 'wisa')
	{
		$wisa = "checked='checked'";
	}
	if ($_GET['wis'] == 'wisb')
	{
		$wisb = "checked='checked'";
	}
	if ($_GET['wis'] == 'wisc')
	{
		$wisc = "checked='checked'";
	}
	if ($_GET['wis'] == 'wisd')
	{
		$wisd = "checked='checked'";
	}
	if ($_GET['nat'] == 'natuurkunde')
	{
		$natuurkunde = "checked='checked'";
	}
	if ($_GET['sch'] == 'scheikunde')
	{
		$scheikunde = "checked='checked'";
	}
	if ($_GET['bio'] == 'biologie')
	{
		$biologie = "checked='checked'";
	}
	if ($_GET['lat'] == 'latijn')
	{
		$latijn = "checked='checked'";
	}
	if ($_GET['gr'] == 'grieks')
	{
		$grieks = "checked='checked'";
	}
	if ($_GET['full'] == 'fulltime')
	{
		$fulltime = "checked='checked'";
	}
	if ($_GET['part'] == 'parttime')
	{
		$parttime = "checked='checked'";
	}
	if ($_GET['dual'] == 'dual')
	{
		$dual = "checked='checked'";
	}
?>

<form action="/filter?profiel=&wis=&nat=&sch=&bio=&lat=&gr=&full=&part=&dual=" method="get">
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Profiel</legend>
		<input type="radio" name="profiel" id="cm" value="cm" <?php echo $cm; ?> />
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
		<input type="radio" name="wis" id="wisd" value="wisd" <?php echo $wisd; ?> />
		<label for="wisd">D</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Andere vakken</legend>
		<input type="checkbox" name="nat" id="natuurkunde" value="natuurkunde" <?php echo $natuurkunde; ?>"/>
		<label for="natuurkunde">Natuurkunde</label>
		<input type="checkbox" name="sch" id="scheikunde" value="scheikunde" <?php echo $scheikunde; ?> />
		<label for="scheikunde">Scheikunde</label>
		<input type="checkbox" name="bio" id="biologie" value="biologie" <?php echo $biologie; ?> />
		<label for="biologie">Biologie</label>
		<input type="checkbox" name="lat" id="latijn" value="latijn" <?php echo $latijn; ?> />
		<label for="latijn">Latijn</label>
		<input type="checkbox" name="gr" id="grieks" value="grieks" <?php echo $grieks; ?> />
		<label for="grieks">Grieks</label>
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
/*
	$var1 = "(admissable_" . $profiel . ".subject NOT LIKE '%wiskunde b%')";
	$var3 = "(admissable_" . $profiel . ".subject NOT LIKE '%wiskunde a%' AND admissable_" . $profiel . ".subject
		NOT LIKE '%wiskunde b%')";
	
	$var5 = "(admissable_" . $profiel . ".subject NOT LIKE '%lat%' AND admissable_" . $profiel . ".subject NOT LIKE '%gr%')";
	$var6 = "(admissable_" . $profiel . ".subject NOT LIKE '%nat%')";
	$var7 = "(admissable_" . $profiel . ".subject NOT LIKE '%nat%' AND admissable_" . $profiel . ".subject NOT LIKE '%sch%')";
	$var8 = "(admissable_" . $profiel . ".subject NOT LIKE '%bio%')";
	
	$var9 = "(NOT (admissable_cm = '0' AND admissable_em = '0' AND admissable_ng = '1' AND admissable_nt = '1'))";

	$where1 = $var1.' AND '.$var5.' AND '.$var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where2 = $var1.' AND '.$var5.' AND '.$var6.' AND '.$var7.' AND '.$var9;
	$where3 = $var1.' AND '.$var5.' AND '.$var6.' AND '.$var9;
	$where4 = $var1.' AND '.$var5.' AND '.$var7.' AND '.$var9;
	$where5 = $var1.' AND '.$var5.' AND '.$var9;
	$where6 = $var1.' AND '.$var5.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where7 = $var1.' AND '.$var5.' AND '.$var8.' AND '.$var9;
	$where8 = $var1.' AND '.$var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where9 = $var1.' AND '.$var6.' AND '.$var7.' AND '.$var9;
	$where10 = $var1.' AND '.$var6.' AND '.$var9;
	$where11 = $var1.' AND '.$var6.' AND '.$var8.' AND '.$var9;
	$where12 = $var1.' AND '.$var6.' AND '.$var8.' AND '.$var9;
	$where13 = $var1.' AND '.$var7.' AND '.$var9;
	$where14 = $var1.' AND '.$var8.' AND '.$var9;
	
	$where15 = $var3.' AND '.$var5.' AND '.$var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where16 = $var3.' AND '.$var5.' AND '.$var6.' AND '.$var7.' AND '.$var9;
	$where17 = $var3.' AND '.$var5.' AND '.$var6.' AND '.$var9;
	$where18 = $var3.' AND '.$var5.' AND '.$var7.' AND '.$var9;
	$where19 = $var3.' AND '.$var5.' AND '.$var9;
	$where20 = $var3.' AND '.$var5.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where21 = $var3.' AND '.$var5.' AND '.$var8.' AND '.$var9;
	$where22 = $var3.' AND '.$var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where23 = $var3.' AND '.$var6.' AND '.$var7.' AND '.$var9;
	$where24 = $var3.' AND '.$var6.' AND '.$var9;
	$where25 = $var3.' AND '.$var6.' AND '.$var8.' AND '.$var9;
	$where26 = $var3.' AND '.$var6.' AND '.$var8.' AND '.$var9;
	$where27 = $var3.' AND '.$var7.' AND '.$var9;
	$where28 = $var3.' AND '.$var8.' AND '.$var9;
	
	$where29 = $var5.' AND '.$var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where30 = $var5.' AND '.$var6.' AND '.$var7.' AND '.$var9;
	$where31 = $var5.' AND '.$var6.' AND '.$var9;
	$where32 = $var5.' AND '.$var7.' AND '.$var9;
	$where33 = $var5.' AND '.$var9;
	$where34 = $var5.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where35 = $var5.' AND '.$var8.' AND '.$var9;
	$where36 = $var6.' AND '.$var7.' AND '.$var8.' AND '.$var9;
	$where37 = $var6.' AND '.$var7.' AND '.$var9;
	$where38 = $var6.' AND '.$var9;
	$where39 = $var6.' AND '.$var8.' AND '.$var9;
	$where40 = $var7.' AND '.$var8.' AND '.$var9;
	$where41 = $var7.' AND '.$var9;
	$where42 = $var8.' AND '.$var9;
	
	$where43 = $var5.' AND '.$var6.' AND '.$var7.' AND '.$var8;
	$where44 = $var5.' AND '.$var6.' AND '.$var7;
	$where45 = $var5.' AND '.$var6;
	$where46 = $var5.' AND '.$var7;
	$where47 = $var5.' AND '.$var9;
	$where48 = $var5.' AND '.$var7.' AND '.$var8;
	$where49 = $var5.' AND '.$var8;
	$where50 = $var6.' AND '.$var7.' AND '.$var8;
	$where51 = $var6.' AND '.$var7;
	$where52 = $var6;
	$where53 = $var6.' AND '.$var8;
	$where54 = $var7.' AND '.$var8;
	$where55 = $var7;
	$where56 = $var8;
	
	echo '<ul data-role="listview" data-filter="true">';
	require "if.php";
	echo '</ul>';
	*/
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
