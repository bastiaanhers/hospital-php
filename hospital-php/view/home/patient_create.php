
	<h2>Patiënts Create</h2>

<div class="container">
	<form action="<?= URL ?>home/createSave" method="post">
	
		<input type="text" name="patient_name" placeholder="name patient">
		<select name="species_id">
			<option value="1">cat</option>
			<option value="2">dog</option>	
		</select>
		<select name="client_id">
			<option value="1">john doe</option>
			<option value="2">jane doe</option>	
		</select>
		<input type="text" name="patient_status" placeholder="broken paw">
	
		<input type="submit" value="Verzenden">
	</form>

</div>