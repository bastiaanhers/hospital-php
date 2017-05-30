function editPatient() 
{
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;

	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;

	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;

	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;

	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0|| strlen($patient_status) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE patients SET patient_name = :patient_name, species_id = :species_id, client_id = :client_id, patient_status = :patient_status WHERE patient_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_status' => $patient_status,
		':id' => $id));

	$db = null;
	
	return true;
}

function edit($id)
{
	render("/home/edit.php", array(
		'patient' => getPatient($id) ));
}

function editSave()
{
	if (!editPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "home/index");
}
