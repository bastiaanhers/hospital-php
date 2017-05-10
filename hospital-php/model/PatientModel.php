<?php 
function getAllPatients(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM patients";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function getAllSpecies(){
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM species";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}
function createPatient() 
{ 
	$patient_name = isset($_POST['patient_name']) ? $_POST['patient_name'] : null;
	$species_id = isset($_POST['species_id']) ? $_POST['species_id'] : null;
	$client_id = isset($_POST['client_id']) ? $_POST['client_id'] : null;
	$patient_status = isset($_POST['patient_status']) ? $_POST['patient_status'] : null;
	
	if (strlen($patient_name) == 0 || strlen($species_id) == 0 || strlen($client_id) == 0 || strlen($patient_status) == 0 ) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO patients(patient_name, species_id, client_id, patient_status) VALUES (:patient_name, :species_id, :client_id, :patient_status)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':patient_name' => $patient_name,
		':species_id' => $species_id,
		':client_id' => $client_id,
		':patient_status' => $patient_status));

	$db = null;
	
	return true;
}
function deletePatient($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM patients WHERE patient_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}