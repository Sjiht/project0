<?php
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
	if ($time == 'fulltime') {
		$fulltime = "checked='checked'";
	}
	if ($time == 'parttime') {
		$parttime = "checked='checked'";
	}
	if ($time == 'dualtime') {
		$dualtime = "checked='checked'";
	}
?>

<form action="" method="GET">
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Profiel</legend>
		<input type="radio" name="profiel" id="cm" value="cm" <?php if (isset($cm)) echo $cm; ?>  />
		<label for="cm">CM</label>
		<input type="radio" name="profiel" id="em" value="em" <?php if (isset($em)) echo $em; ?> />
		<label for="em">EM</label>
		<input type="radio" name="profiel" id="ng" value="ng" <?php if (isset($ng)) echo $ng; ?> />
		<label for="ng">NG</label>
		<input type="radio" name="profiel" id="nt" value="nt" <?php if (isset($nt)) echo $nt; ?> />
		<label for="nt">NT</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Wiskunde</legend>
		<input type="radio" name="wis" id="wisa" value="wisa" <?php if (isset($wisa)) echo $wisa; ?> />
		<label for="wisa">A</label>
		<input type="radio" name="wis" id="wisb" value="wisb" <?php if (isset($wisb)) echo $wisb; ?> />
		<label for="wisb">B</label>
		<input type="radio" name="wis" id="wisc" value="wisc" <?php if (isset($wisc)) echo $wisc; ?> />
		<label for="wisc">C</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Andere vakken</legend>
		<input type="checkbox" name="nat" id="natuurkunde" value="natuurkunde" <?php if (isset($natuurkunde)) echo $natuurkunde; ?>"/>
		<label for="natuurkunde">Natuurkunde</label>
		<input type="checkbox" name="sch" id="scheikunde" value="scheikunde" <?php if (isset($scheikunde)) echo $scheikunde; ?> />
		<label for="scheikunde">Scheikunde</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<input type="checkbox" name="lat" id="latijn" value="latijn" <?php if (isset($latijn)) echo $latijn; ?> />
		<label for="latijn">Latijn</label>
		<input type="checkbox" name="gr" id="grieks" value="grieks" <?php if (isset($grieks)) echo $grieks; ?> />
		<label for="grieks">Grieks</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<input type="checkbox" name="bio" id="biologie" value="biologie" <?php if (isset($biologie)) echo $biologie; ?> />
		<label for="biologie">Biologie</label>
	</fieldset>
	<fieldset data-role="controlgroup" data-type="horizontal">
		<legend>Studietype</legend>
		<input type="radio" name="time" id="fulltime" value="fulltime" <?php if (isset($fulltime)) echo $fulltime; ?> />
		<label for="fulltime">Voltijd</label>
		<input type="radio" name="time" id="parttime" value="parttime" <?php if (isset($parttime))  echo $parttime; ?> />
		<label for="parttime">Deeltijd</label>
	</fieldset>
	<input type="submit" data-theme="a" value="Filter" />
</form>

<br /><br /><br />

<div id="list">
	<ul data-role="listview" data-filter="true" data-filter-placeholder="Voer een zoekterm in..">
	<?php
	foreach ($lijst_studies as $row)
	{
		$studie_id = $row->id;
		$studie_naam = $row->name;
		
		echo "<li><a href='/index.php/studie?study=" . $studie_id . "'>" . $studie_naam . "</a></li>";
	}
	?>
	</ul>
</div>