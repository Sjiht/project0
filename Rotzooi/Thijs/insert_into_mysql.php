<?php

function insert_into_mysql(&$kind)
{
	$n = 1;
	while( $n < 1100 )
	{
		$serverfileurl = "http://www.hodexer.nl/hodex/uva/hodex_nl_uva_" . $n . $kind .  ".xml";
		$serverfile = file_get_contents($serverfileurl);
		
		if ($serverfile != '')
		{
			$xmlstr = str_replace('<?xml version="1.0" encoding="utf-8"?>', '<?php
$xmlstr = <<<XML
', $serverfile);
			$xmlstr = str_replace('</program>', '</program>
XML;
?>', $xmlstr);
	
			$localfileurl = "temp.php";
			$fh = fopen($localfileurl, 'w');
			fwrite($fh, $xmlstr);
			fclose($fh);
	
			include 'temp.php';
			$xml = new SimpleXMLElement($xmlstr);
			echo $xml->expires . ' ' . $n . '<br />';
			
			if ($xml->programClassification->admissableProgram[0]->profile != '')
			{
				
							// insert degree, financing, credits, duration, form, id, level, cluster
			if ($xml->programClassification->degree != '')
			{
					
				if( $xml->programClassification->degree != '' )
					{
						$degree = $xml->programClassification->degree;
						
					}
	
					if( $xml->programClassification->financing != '' )
					{
						$financing = $xml->programClassification->financing;
						
					}	
					
					if( $xml->programClassification->programCredits != '' )
					{
						$credits = $xml->programClassification->programCredits;
						
					}	
					
					if( $xml->programClassification->programDuration != '' )
					{
						$duration = $xml->programClassification->programDuration;
						
					}	
	
					if( $xml->programClassification->programForm != '' )
					{
						$programForm = $xml->programClassification->programForm;
						
					}	
					
					if( $xml->programClassification->programId != '' )
					{
						$programId = $xml->programClassification->programId;
						
					}	
					
					if( $xml->programClassification->programLevel != '' )
					{
						$programLevel = $xml->programClassification->programLevel;
						
					}
					
					if( $xml->programClassification->studyCluster != '' )
					{
						$studyCluster = $xml->programClassification->studyCluster;
						
					}
			
			}		

			echo '<br />';
			
				for($x=0; $x<10; $x++)
				{
					$profile = $xml->programClassification->admissableProgram[$x]->profile;
					
					if ($profile == 'CM')
					{
						$cm = '1';
					}
					
					if ($profile == 'EM')
					{
						$em = '1';
					}
					
					if ($profile == 'NG')
					{
						$ng = '1';
					}
					
					if ($profile == 'NT')
					{
						$nt = '1';
					}
					
				}
				echo $cm;
				echo $em;
				echo $ng;
				echo $nt;
				echo '<br />';
			}
			
			// insert profile and additionalSubject
			if ($xml->programClassification->admissableProgram[0]->profile != '')
			{
				for($x=0; $x<4; $x++)
				{
					
					if( $xml->programClassification->admissableProgram[$x]->profile != '' )
					{
						$profile = $xml->programClassification->admissableProgram[$x]->profile;
			
					}
	
					if( $xml->programClassification->admissableProgram[$x]->additionalSubject != '' )
					{
						$additionalSubject = $xml->programClassification->admissableProgram[$x]->additionalSubject;
						
					}
					
					// admissableCM
					if($profile == 'CM')
					{
					// programId (1,2,3 etc. studynumber)
					echo $programId . '<br />';
					// profile (NT,NG etc.)
					echo $profile . '<br />';
					// additionalSubject ( wiskunde B, natuurkunde etc.)
					echo $additionalSubject . '<br />';
					}
					
					// admissableEM
					if($profile == 'EM')
					{
					// programId (1,2,3 etc. studynumber)
					echo $programId . '<br />';
					// profile (NT,NG etc.)
					echo $profile . '<br />';
					// additionalSubject ( wiskunde B, natuurkunde etc.)
					echo $additionalSubject . '<br />';
					}
					
					// admissableNG
					if($profile == 'NG')
					{
					// programId (1,2,3 etc. studynumber)
					echo $programId . '<br />';
					// profile (NT,NG etc.)
					echo $profile . '<br />';
					// additionalSubject ( wiskunde B, natuurkunde etc.)
					echo $additionalSubject . '<br />';
					}
					
					// admissableNT
					if($profile == 'NT')
					{
					// programId (1,2,3 etc. studynumber)
					echo $programId . '<br />';
					// profile (NT,NG etc.)
					echo $profile . '<br />';
					// additionalSubject ( wiskunde B, natuurkunde etc.)
					echo $additionalSubject . '<br />';
					}
					
				}
			}		
			echo '<br />';
			
			
			// insert all of the coursenames and types
			for($y=0; $y<15; $y++)
			{	
				if( $xml->programCurriculum->course[$y]->courseName != '' )
				{
					$courseName = $xml->programCurriculum->course[$y]->courseName;
					
				}
					if( $xml->programCurriculum->course[$y]->partOfCurriculum != '' )
				{
					$partOfCurriculum = $xml->programCurriculum->course[$y]->partOfCurriculum;
				}	
				
				if ($xml->programCurriculum->course[$y]->partOfCurriculum != $xml->programCurriculum->course[($y+1)]->partOfCurriculum)
				{
					// programId (1,2,3 etc. studynumber)
					echo $programId . '<br />';				
					// courseName (Energie transities)
					echo $courseName . '<br />';
					// courseType (regular)
					echo $partOfCurriculum . '<br />';
				}
			}
			echo '<br />';
				
				
			// insert language
			if( $xml->programCurriculum->instructionLanguage->languageCode != '' )
			{
				$languageCode = $xml->programCurriculum->instructionLanguage->languageCode;
				
			}
			
			// insert language percentage
				if( $xml->programCurriculum->instructionLanguage->percentage != '' )
			{
				$percentage = $xml->programCurriculum->instructionLanguage->percentage;
				
			}	
			

			// insert contentlinks
			for($y=0; $y<15; $y++)
			{
				
				if( $xml->programDescriptions->contentLink[$y]->contentSummary != '' )
				{
					$contentType = $xml->programDescriptions->contentLink[$y]->contentSummary;
				}
				
				if( $xml->programDescriptions->contentLink[$y]->contentType != '' )
				{
					$contentType = $xml->programDescriptions->contentLink[$y]->contentType;
				}
				if( $xml->programDescriptions->contentLink[$y]->subject != '' )
				{
					$subject = $xml->programDescriptions->contentLink[$y]->subject;
				}		
				
				if( $xml->programDescriptions->contentLink[$y]->webLink != '' )
				{
					$webLink = $xml->programDescriptions->contentLink[$y]->webLink;
				}	
				
				if ( $xml->programDescriptions->contentLink[$y]->webLink != $xml->programDescriptions->contentLink[($y+1)]->webLink )
				{
					// programId (1,2,3 etc.)
					echo $programId . '<br />';
					// contentSummary (summary)
					echo $contentSummary . '<br />';
					// contentType (movie, link)
					echo $contentType . '<br />';
					// subject (subject of link)
					echo $subject . '<br />';
					// weblink (link)
					echo $webLink . '<br />';
				}
			}
			echo '<br />';

			// insert programDescription
			if( $xml->programDescriptions->programDescription != '' )
			{
				$programDescription = $xml->programDescriptions->programDescription;
				
				
				$programDescriptionArray = str_split($programDescription, 250);
				
				echo $programId;
				echo $programDescriptionArray[0];
				echo $programDescriptionArray[1];
				echo $programDescriptionArray[2];
				echo $programDescriptionArray[3];
				echo $programDescriptionArray[4];
				echo $programDescriptionArray[5];
				echo $programDescriptionArray[6];
				echo $programDescriptionArray[7];
				echo $programDescriptionArray[8];
				
			}
			echo '<p />';
			
			// insert programName
			if( $xml->programDescriptions->programName != '' )
			{
				$programName = $xml->programDescriptions->programName;

			}
			
			// insert programSummary
			if( $xml->programDescriptions->programSummary != '' )
			{
				$programSummary = $xml->programDescriptions->programSummary;
				
			}
			echo '<br />';
			
			// insert Searchword
			for($y=0; $y<3; $y++)
			{	
				if( $xml->programDescriptions->searchword[0] != '' )
				{
					$searchword = $xml->programDescriptions->searchword[$y];
				}
				// searchWord (aarde, bananenschil)
				echo $searchword . '<br />';
			}
			echo '<br />';	
			
			// insert webLink
			if( $xml->programDescriptions->webLink != '' )
			{
				$webLink = $xml->programDescriptions->webLink;
				
			}
			echo '<br />';
			
			// insert faculty
			for($y=0; $y<2; $y++)
			{
				if( $xml->programOrganization->faculty[$y] != '' )
				{
					$faculty = $xml->programOrganization->faculty[$y];
					
				}
				echo $facultyId . '<br />';
				echo $faculty . '<br />';
			}
			echo '<br />';
			
			// insert studyCluster
			for($y=0; $y<10; $y++)
			{
				if( $xml->programFree->studyClusterUvA[$y] != '' )
				{
					$studyClusterUvA = $xml->programFree->studyClusterUvA[$y];
					
				}
				
				if( $xml->programFree->studyClusterUvA[$y] != $xml->programFree->studyClusterUvA[($y+1)] )
				{
					// studyClusterUvA (aarde,natuur,mileu)
					echo $studyClusterUvA . '<br />';
			
				}
			}
			echo '<br />';
			
			// insert facultyId
			if( $xml->programFree->facultyId != '' )
			{
				$facultyId = $xml->programFree->facultyId;
				
			}
		}
		$n = $n + 1;
		
		// programs
		echo $programId . '<br />';
		echo $programName . '<br />';
		echo $programSummary . '<br />';
		echo $facultyId . '<br />';
		echo $languageCode . '<br />';
		echo $percentage . '<p />';
		
		// programClassifactions
		echo $programId . '<br />';
		echo $degree . '<br />';
		echo $financing . '<br />';
		echo $credits . '<br />';
		echo $duration . '<br />';
		echo $programForm . '<br />';
		echo $programLevel . '<br />';
		echo $studyCluster . '<br />';
	
		
		

	}
}

$kind = '_dual';
#insert_into_mysql($kind);

$kind = '_parttime';
#insert_into_mysql($kind);

$kind = '_fulltime';
#insert_into_mysql($kind);

$kind = '';
insert_into_mysql($kind);

?>