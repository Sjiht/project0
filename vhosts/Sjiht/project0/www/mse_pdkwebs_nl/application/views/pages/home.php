<div id="content">

	<div id="browse">
		<h3>Browse</h2>
	</div>
	
	<div id="browse">
		<h3>Filter</h2>
	</div>
</div>

	
</div>

		<div class="content-primary" type="hidden">	
			<ul data-role="listview" data-filter="true" style="width:99%;">
	  			<?php
					$this->load->database();
					$query = $this->db->query("SELECT program_id, name FROM programs ORDER BY name ASC");
			
					foreach ($query->result() as $row)
					{
						echo "<li><a href='/view?study=" . $row->program_id . "'>" . $row->name . "</a></li>";
					}
				?>
			</ul>
				</div>

		</div>	
	</div>
	
</div>


