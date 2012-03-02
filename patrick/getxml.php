<?php

$n = 1;
while( $n < 1100 )
{
	$serverfileurl = "http://www.hodexer.nl/hodex/uva/hodex_nl_uva_" . $n . ".xml";
	$serverfile = file_get_contents($serverfileurl);
	
	if ($serverfile != '')
	{
		$appel = str_replace('<?xml version="1.0" encoding="utf-8"?>', '<<<XML
', $serverfile);
		$appel = str_replace('</program>', '</program>
XML;', $appel);

		#$localfileurl = "xml/hodex_nl_uva_" . $n . ".php";
		#$fh = fopen($localfileurl, 'w');
		#fwrite($fh, $xmlstr);
		#fclose($fh);

		
		$xml = new SimpleXMLElement($appel);
		
		// insert profile and additionalSubject
		if ($xml->programClassification->admissableProgram[0]->profile != '')
		{
			for($x=0; $x<10; $x++)
			{
				if ($xml->programClassification->admissableProgram[$x]->profile != '' )
				{
				$profile = $xml->programClassification->admissableProgram[$x]->profile;
				echo $profile . '<br />';
				}
				if ($xml->programClassification->admissableProgram[$x]->additionalSubject != '' )
				{
				$additionalSubject = $xml->programClassification->admissableProgram[$x]->additionalSubject;
				echo $additionalSubject . '<br />';
				}	
			}
		}	
	}
	
	$n = $n + 1;
 
}
?>