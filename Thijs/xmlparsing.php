 <?php

for($n=1; $n<1100; $n++)
{
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
		echo '<br />';
		
		// insert degree, financing, credits, duration, form, id, level, cluster
		if ($xml->programClassification->degree != '')
		{
				
				if( $xml->programClassification->degree != '' )
				{
					$degree = $xml->programClassification->degree;
					echo $degree . '<br />';
				}

				if( $xml->programClassification->financing != '' )
				{
					$financing = $xml->programClassification->financing;
					echo $financing . '<br />';
				}	
				
				if( $xml->programClassification->programCredits != '' )
				{
					$credits = $xml->programClassification->programCredits;
					echo $credits . '<br />';
				}	
				
				if( $xml->programClassification->programDuration != '' )
				{
					$duration = $xml->programClassification->programDuration;
					echo $duration . '<br />';
				}	
				
				if( $xml->programClassification->programDuration != '' )
				{
					$duration = $xml->programClassification->programDuration;
					echo $duration . '<br />';
				}	

				if( $xml->programClassification->programForm != '' )
				{
					$programForm = $xml->programClassification->programForm;
					echo $programForm . '<br />';
				}	
				
				if( $xml->programClassification->programId != '' )
				{
					$programId = $xml->programClassification->programId;
					echo $programId . '<br />';
				}	
				
				if( $xml->programClassification->programLevel != '' )
				{
					$programLevel = $xml->programClassification->programLevel;
					echo $programLevel . '<br />';
				}
				
				if( $xml->programClassification->studyCluster != '' )
				{
					$studyCluster = $xml->programClassification->studyCluster;
					echo $studyCluster . '<br />';
				}
				
		}		
		
		echo '<br />';
		
		if ($xml->programCurriculum->course[0]->courseID != '')
		{	
			for($y=0; $y<10; $y++)
			{
				
				if( $xml->programCurriculum->course[$y]->courseID != '' )
				{
					$courseID = $xml->programCurriculum->course[$y]->courseID;
					echo $courseID . '<br />';
				}

				if( $xml->programCurriculum->course[$y]->courseName != '' )
				{
					$courseName = $xml->programCurriculum->course[$y]->courseName;
					echo $courseName . '<br />';
				}	
			}
		}		
		echo '<br />';			
		echo '<br />';
	} 
}

?>