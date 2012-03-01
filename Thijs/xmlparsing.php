 <?php
$id = 0;

for($n=1; $n<1100; $n++)
{
	$id++;
	if (file_exists ( 'xmlfiles/hodex_nl_uva_'.$n.'.php' ))
	{
		include 'xmlfiles/hodex_nl_uva_'.$n.'.php';
		$xml = new SimpleXMLElement($xmlstr);
		echo $xml->expires . ' ' . $n . '<br />';
		
		
		// insert profile and additionalSubject
		if ($xml->programClassification->admissableProgram[0]->profile != '')
		{
			for($x=0; $x<10; $x++)
			{
				
				if( $xml->programClassification->admissableProgram[$x]->profile != '' )
				{
					$profile = $xml->programClassification->admissableProgram[$x]->profile;
					echo $profile . '<br />';
				}

					if( $xml->programClassification->admissableProgram[$x]->additionalSubject != '' )
					{
						$additionalSubject = $xml->programClassification->admissableProgram[$x]->additionalSubject;
						echo $additionalSubject . '<br />';
					}	
			}
		}
		echo $id;			
		echo '<br />';
		echo '<br />';
	} 
}

?>