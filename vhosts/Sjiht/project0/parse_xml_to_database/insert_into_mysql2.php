<?php
// get content from hodexDirectory.xml
$serverfileurl = "http://www.hodexer.nl/hodex/uva/hodexDirectory.xml";
$serverfile = file_get_contents($serverfileurl);

// replace strings, so we can read the file with PHP
$xmlstr = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '<?php
$xmlstr = <<<XML
', $serverfile);
$xmlstr = str_replace('</hodexDirectory>', '</hodexDirectory>
XML;
?>', $xmlstr);

// write hodexDirectory.xml content to file
$localfileurl = "temp1.php";
$fh = fopen($localfileurl, 'w');
fwrite($fh, $xmlstr);
fclose($fh);

// get new variable $xmlstr from file temp1.php
include 'temp1.php';
$xml_main = new SimpleXMLElement($xmlstr);
for ($count1=0; $count1<=430; $count1++)
{
	$xml_url = $xml_main->hodexResource[$count1]->hodexResourceURL;
	
	// get content from the file where $xml_url points to
	$serverfile = file_get_contents($xml_url);
	$xmlstr = str_replace('<?xml version="1.0" encoding="utf-8"?>', '<?php
$xmlstr = <<<XML
', $serverfile);
	$xmlstr = str_replace('</program>', '</program>
XML;
?>', $xmlstr);

	// write $xml_url file content to file
	$localfileurl = "temp2.php";
	$fh = fopen($localfileurl, 'w');
	fwrite($fh, $xmlstr);
	fclose($fh);
	
	// get new variable $xmlstr from file temp2.php
	include 'temp2.php';
	$xml = new SimpleXMLElement($xmlstr);
	
	// put the 'simple' XML tags that we need into variables
	$degree = $xml->programClassification->degree;
	$financing = $xml->programClassification->financing;
	$credits = $xml->programClassification->programCredits;
	$duration = $xml->programClassification->programDuration;
	$form = $xml->programClassification->programForm;
	$program_id = $xml->programClassification->programId;
	$level = $xml->programClassification->programLevel;
	$cluster = $xml->programClassification->studyCluster;
	$name = $xml->programDescriptions->programName;
	$summary = $xml->programDescriptions->programSummary;
	$webLink = $xml->programDescriptions->webLink;
	$faculty_id = $xml->programFree->facultyId;
	$lang = $xml->programCurriculum->instructionLanguage->languageCode;
	$langpercentage = $xml->programCurriculum->instructionLanguage->percentage;
	
	// make MySQL connection and select database 'mse2'
	$link = mysql_connect('localhost', 'root', 'root');
	if (!$link)
	{
    	die('Not connected : ' . mysql_error());
	}
	$db_selected = mysql_select_db('mse2', $link);
	if (!$db_selected)
	{
	    die ('Can\'t use foo : ' . mysql_error());
	}
	
	
	$programDescription = $xml->programDescriptions->programDescription;
	$programDescriptionArray = str_split($programDescription, 250);
	$part1 = $programDescriptionArray[0];
	$part2 = $programDescriptionArray[1];
	$part3 = $programDescriptionArray[2];
	$part4 = $programDescriptionArray[3];
	$part5 = $programDescriptionArray[4];
	
	// replace ' with "
	$part1 = str_replace("'", '"', $part1);
	$part2 = str_replace("'", '"', $part2);
	$part3 = str_replace("'", '"', $part3);
	$part4 = str_replace("'", '"', $part4);
	$part5 = str_replace("'", '"', $part5);
	if ($part1 == '') $part1 = 'NULL';
	if ($part2 == '') $part2 = 'NULL';
	if ($part3 == '') $part3 = 'NULL';
	if ($part4 == '') $part4 = 'NULL';
	if ($part5 == '') $part5 = 'NULL';
	
	// insert into program_descriptions
	$sql = "INSERT INTO program_descriptions (program_id, part1, part2, part3, part4, part5)
	VALUES ('$program_id', '$part1', '$part2', '$part3', '$part4', '$part5')";
	$sql = mysql_query($sql) or die(mysql_error());
	
	
	// replace ' with "
	$summary = str_replace("'", '"', $summary);
	
	// insert variables into table programs
	$sql = "INSERT INTO programs (program_id, name, summary, faculty_id, lang, langpercentage)
	VALUES ('$program_id', '$name', '$summary', '$faculty_id', '$lang', '$langpercentage')";
	$sql = mysql_query($sql) or die(mysql_error());
	
	
	// insert variables into table program_classifications
	$sql = "INSERT INTO program_classifications (program_id, degree, financing, credits, duration, form, level, cluster)
	VALUES ('$program_id', '$degree', '$financing', '$credits', '$duration', '$form', '$level', '$cluster')";
	$sql = mysql_query($sql) or die(mysql_error());
	
	
	$cm = 0;
	$em = 0;
	$ng = 0;
	$nt = 0;
	for ($n=0; $n<5; $n++)
	{
		$profile = $xml->programClassification->admissableProgram[$n]->profile;
		if ($profile == 'CM')
		{
			$cm = 1;
		}
		if ($profile == 'EM')
		{
			$em = 1;
		}
		if ($profile == 'NG')
		{
			$ng = 1;
		}
		if ($profile == 'NT')
		{
			$nt = 1;
		}
	}
	// insert variables into table admissable_programs
	$sql = "INSERT INTO admissable_programs (program_id, cm, em, ng, nt)
	VALUES ('$program_id', '$cm', '$em', '$ng', '$nt')";
	$sql = mysql_query($sql) or die(mysql_error());
	
	
	for ($n=0; $n<4; $n++)
	{
		if( $xml->programClassification->admissableProgram[$n]->profile != '')
		{
			$profile = $xml->programClassification->admissableProgram[$n]->profile;
		}
		if( $xml->programClassification->admissableProgram[$n]->additionalSubject != '')
		{
			$subject = $xml->programClassification->admissableProgram[$n]->additionalSubject;
		}
		if($profile == 'CM')
		{
			// check if there is already a program_id $program_id AND subject $subject
			$sql = "SELECT count(program_id) FROM admissable_cm WHERE program_id = '$program_id' AND subject = '$subject'";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query))
			{
				$check = $row['count(program_id)'];
			}
			if ($check < 1)
			{
				// insert variables into table admissable_nt
				$sql = "INSERT INTO admissable_cm (program_id, subject)
				VALUES ('$program_id', '$subject')";
				$sql = mysql_query($sql) or die(mysql_error());
			}
		}
		if($profile == 'EM')
		{
			// check if there is already a program_id $program_id AND subject $subject
			$sql = "SELECT count(program_id) FROM admissable_em WHERE program_id = '$program_id' AND subject = '$subject'";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query))
			{
				$check = $row['count(program_id)'];
			}
			if ($check < 1)
			{
				// insert variables into table admissable_nt
				$sql = "INSERT INTO admissable_em (program_id, subject)
				VALUES ('$program_id', '$subject')";
				$sql = mysql_query($sql) or die(mysql_error());
			}
		}
		if($profile == 'NG')
		{
			// check if there is already a program_id $program_id AND subject $subject
			$sql = "SELECT count(program_id) FROM admissable_ng WHERE program_id = '$program_id' AND subject = '$subject'";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query))
			{
				$check = $row['count(program_id)'];
			}
			if ($check < 1)
			{
				// insert variables into table admissable_nt
				$sql = "INSERT INTO admissable_ng (program_id, subject)
				VALUES ('$program_id', '$subject')";
				$sql = mysql_query($sql) or die(mysql_error());
			}
		}
		if($profile == 'NT')
		{
			// check if there is already a program_id $program_id AND subject $subject
			$sql = "SELECT count(program_id) FROM admissable_nt WHERE program_id = '$program_id' AND subject = '$subject'";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query))
			{
				$check = $row['count(program_id)'];
			}
			if ($check < 1)
			{
				// insert variables into table admissable_nt
				$sql = "INSERT INTO admissable_nt (program_id, subject)
				VALUES ('$program_id', '$subject')";
				$sql = mysql_query($sql) or die(mysql_error());
			}
		}
	}
	
	
	for ($n=0; $n<35; $n++)
	{	
		if ($xml->programCurriculum->course[$n]->courseName != '')
		{
			$course_name = $xml->programCurriculum->course[$n]->courseName;	
		}
			if ($xml->programCurriculum->course[$n]->partOfCurriculum != '')
		{
			$partofcurriculum = $xml->programCurriculum->course[$n]->partOfCurriculum;
		}	
		
		if ($xml->programCurriculum->course[$n]->partOfCurriculum != $xml->programCurriculum->course[($n+1)]->partOfCurriculum)
		{
			// replace ' with "
			$course_name = str_replace("'", '"', $course_name);
			
			// insert variables into table courses
			$sql = "INSERT INTO courses (program_id, course_name, partofcurriculum)
			VALUES ('$program_id', '$course_name', '$partofcurriculum')";
			$sql = mysql_query($sql) or die(mysql_error());
		}
	}
	
	
	for ($n=0; $n<15; $n++)
	{
		if ($xml->programDescriptions->contentLink[$n]->subject != '')
		{
			$summary = $xml->programDescriptions->contentLink[$n]->contentSummary;
			$type = $xml->programDescriptions->contentLink[$n]->contentType;
			$subject = $xml->programDescriptions->contentLink[$n]->subject;
			$weblink = $xml->programDescriptions->contentLink[$n]->webLink;	
		}
		if ($xml->programDescriptions->contentLink[$n]->webLink != $xml->programDescriptions->contentLink[($n+1)]->webLink)
		{
			$summaryArray = str_split($summary, 250);
			$summary1 = $summaryArray[0];
			$summary2 = $summaryArray[1];
			$summary3 = $summaryArray[2];
			
			// replace ' with "
			$summary1 = str_replace("'", '"', $summary1);
			$summary2 = str_replace("'", '"', $summary2);
			$summary3 = str_replace("'", '"', $summary3);
			if ($summary1 == '') $summary1 = 'NULL';
			if ($summary2 == '') $summary2 = 'NULL';
			if ($summary3 == '') $summary3 = 'NULL';
			
			// insert variables into table program_links
			$sql = "INSERT INTO program_links (program_id, summary1, summary2, summary3, type, subject, weblink)
			VALUES ('$program_id', '$summary1', '$summary2', '$summary3', '$type', '$subject', '$weblink')";
			$sql = mysql_query($sql) or die(mysql_error());
		}
	}
	
	
	for ($n=0; $n<3; $n++)
	{	
		if ($xml->programDescriptions->searchword[$n] != '')
		{
			$word = $xml->programDescriptions->searchword[$n];
			// insert variables into table search
			$sql = "INSERT INTO search (program_id, word)
			VALUES ('$program_id', '$word')";
			$sql = mysql_query($sql) or die(mysql_error());
		}
	}
		
	
	for ($n=0; $n<5; $n++)
	{
		if ($xml->programOrganization->faculty[$n] != $xml->programOrganization->faculty[$n+1])
		{
			$faculty_name = $xml->programOrganization->faculty[$n];
			
			// check if there is already a faculty_name $faculty_name
			$sql = "SELECT count(faculty_name) FROM facultys WHERE faculty_name = '$faculty_name'";
			$query = mysql_query($sql);
			while($row = mysql_fetch_array($query))
			{
				$check = $row['count(faculty_name)'];
			}
			if ($check < 1)
			{
				// insert variables into table facultys
				$sql = "INSERT INTO facultys (faculty_id, faculty_name)
				VALUES ('$faculty_id', '$faculty_name')";
				$sql = mysql_query($sql) or die(mysql_error());
			}
		}
		echo "<p />";
	}
	
	
	// insert studyCluster
	for ($n=0; $n<10; $n++)
	{
		if ($xml->programFree->studyClusterUvA[$n] != $xml->programFree->studyClusterUvA[($n+1)])
		{
			$cluster_name = $xml->programFree->studyClusterUvA[$n];
			// insert variables into table clusters
			$sql = "INSERT INTO clusters (program_id, cluster_name)
			VALUES ('$program_id', '$cluster_name')";
			$sql = mysql_query($sql) or die(mysql_error());
		}
	}
}


// close MySQL connection
mysql_close($link);
?>