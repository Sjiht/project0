<div class="browse" data-role="collapsible" style="width:99%;">
	<h3>Fulltime studies</h3><br />
	<ul data-role="listview" data-filter="true">
		<?php
			$this->load->database();
			$query = $this->db->query("SELECT program_id, name, lang FROM programs WHERE program_id NOT LIKE '%parttime%' AND program_id NOT LIKE '%dual%' ORDER BY name ASC");
			foreach ($query->result() as $row)
			{
				echo "<li><a href='/view?study=" . $row->program_id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
			}
		?>
	</ul>
</div>
<div class="browse" data-role="collapsible" style="width:99%;">
	<h3>Deeltijd studies</h3><br />
	<ul data-role="listview" data-filter="true">
		<?php
			$this->load->database();
			$query = $this->db->query("SELECT program_id, name, lang FROM programs WHERE program_id LIKE '%parttime%' ORDER BY name ASC");
			foreach ($query->result() as $row)
			{
				echo "<li><a href='/view?study=" . $row->program_id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
			}
		?>
	</ul>
</div>
<div class="browse" data-role="collapsible" style="width:99%;">
	<h3>Duale studies</h3><br />
	<ul data-role="listview" data-filter="true">
		<?php
			$this->load->database();
			$query = $this->db->query("SELECT program_id, name, lang FROM programs WHERE program_id LIKE '%dual%' ORDER BY name ASC");
			foreach ($query->result() as $row)
			{
				echo "<li><a href='/view?study=" . $row->program_id . "'>" . $row->name . " (" . $row->lang . ")</a></li>";
			}
		?>
	</ul>
</div>