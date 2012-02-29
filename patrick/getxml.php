<?php

$n = 1;
while( $n < 1100 )
{
	$serverfileurl = "http://www.hodexer.nl/hodex/uva/hodex_nl_uva_" . $n . "_dual.xml";
	$serverfile = file_get_contents($serverfileurl);
	
	$localfileurl = "dual/hodex_nl_uva_" . $n . "_dual.php";
	
	$text = str_replace('<?xml version="1.0" encoding="utf-8"?>', '<?php
$xmlstr = <<<XML
', $serverfile);
	
	$text = str_replace('</program>', '</program>
XML;
?>', $text);
	
	echo $text;
	
	if ($text != '') {
		$fh = fopen($localfileurl, 'w');
		fwrite($fh, $text);
		fclose($fh);
	}
	
	$n = $n + 1;
}


?>