<!DOCTYPE html>

<html lang="nl">
	<head>
		<meta name="viewport" content="width=device-width" charset="utf-8">
		<title>UvA Studiegids - <?php echo htmlspecialchars($title); ?></title>
		<link rel="stylesheet" href="<?php echo $this->config->item('base_url') . $data['css'] = $this->config->item('css'); ?>" />
		<script src="/jquery-1.6.4.min.js"></script>
		<script src="/jquery.mobile-1.0.1.min.js"></script>
	</head>
	<body>
		<div id='page' data-role="page" data-theme="a" data-content-theme="a">
			<div data-role="header" data-position="inline" style="height: 76px;">
				<br />
				<h1>UvA Studiegids</h1>
				<?php 
				if($this->input->get('study', TRUE) != '') {
					echo "<a onClick='history.back();' data-role='button' data-inline='true' data-icon='arrow-l' style='height: 85px;'>Back</a>";
				}
				?>
			</div>
			<div id='id_content' data-role='content'>