
			<h1>Hospital</h1>
	<ul>
		<li><a href="patients.html">Patiënts</a></li>
		<li><a href="clients.html">Clients</a></li>
		<li><a href="species.html">Species</a></li>
	</ul>

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
				<td>edit</td>
				<td>delete</td>

			</tr>
			<?php } ?>
		</tbody>
