
	<h2>Patiënts</h2>
	
	<table>
		<thead>
			<tr>
				<th>patient id</th>
				<th>Name</th>
				<th>Species</th>
				<th>Status</th>
				<th>Client</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		</tbody>
		<?php 

		foreach ($patients as $patient){?>

			<tr>
				<td><?= $patient['patient_id']; ?></td>
				<td><?= $patient['patient_name']; ?></td>
				<td><?= $patient['species_id']; ?></td>
				<td><?= $patient['patient_status']; ?></td>
				<td><?= $patient['client_id']; ?></td>

				<td> <a href="<?= URL ?>home/edit/
				<?= $patient['patient_id'] ?>">edit</a></td>

				<td> <a href="<?= URL ?>/home/delete/<?= $patient['patient_id'] ?>">delete</a></td>

			</tr>
			<?php } ?>
		</tbody>
			<p><a href="<?= URL ?>home/patient_create">Create</a></p>
