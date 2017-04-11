<div class="container">
	<h1>Edit</h1>
	<form action="<?= URL ?>Hospital/editSave" method="post">
	
		<input type="text" name="firstname" value="<?= $Hospital['Hospital_firstname']; ?>">
		<input type="text" name="lastname" value="<?= $Hospital['Hospital_lastname']; ?>">
		
		<select name="gender">
			<option value="male" <?php if ($Hospital['Hospital_gender'] == "male") { echo "selected=\"true\""; } ?>>Male</option>
			<option value="female" <?php if ($Hospital['Hospital_gender'] == "female") { echo "selected=\"true\""; } ?>>Female</option>	
		</select>

		<input type="hidden" name="id" value="<?= $Hospital['Hospital_id']; ?>">
		<input type="submit" value="Verzenden">
	
	</form>

</div>
