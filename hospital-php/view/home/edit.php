
	<h2>Patiënts Edit</h2>

<div class="container">
	<form action="<?= URL ?>home/editSave" method="post">
	
		<input type="text" name="patient_name" value="<?= $patient['patient_name']; ?>">

		<input type="text" name="species_id" value="<?= $patient['species_id']; ?>">

		<input type="text" name="client_id" value="<?= $patient['client_id']; ?>">

		<input type="text" name="patient_status" value="<?= $patient['patient_status']; ?>">

		
		</select>

		<input type="hidden" name="id" value="
		<?= $patient['patient_id']; ?>">

		<input type="submit" value="Verzenden">
	
	</form>


</div>