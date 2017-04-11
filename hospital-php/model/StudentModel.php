<?php

function getHospital($id) 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM Hospital WHERE Hospital_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		":id" => $id));

	$db = null;

	return $query->fetch();
}

function getAllHospital() 
{
	$db = openDatabaseConnection();

	$sql = "SELECT * FROM Hospital";
	$query = $db->prepare($sql);
	$query->execute();

	$db = null;

	return $query->fetchAll();
}

function editHospital() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	$id = isset($_POST['id']) ? $_POST['id'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($gender) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "UPDATE Hospital SET Hospital_firstname = :firstname, Hospital_lastname = :lastname, Hospital_gender = :gender WHERE Hospital_id = :id";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':gender' => $gender,
		':id' => $id));

	$db = null;
	
	return true;
}

function deleteHospital($id = null) 
{
	if (!$id) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "DELETE FROM Hospital WHERE Hospital_id=:id ";
	$query = $db->prepare($sql);
	$query->execute(array(
		':id' => $id));

	$db = null;
	
	return true;
}

function createHospital() 
{
	$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : null;
	$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : null;
	$gender = isset($_POST['gender']) ? $_POST['gender'] : null;
	
	if (strlen($firstname) == 0 || strlen($lastname) == 0 || strlen($gender) == 0) {
		return false;
	}
	
	$db = openDatabaseConnection();

	$sql = "INSERT INTO Hospital(Hospital_firstname, Hospital_lastname, Hospital_gender) VALUES (:firstname, :lastname, :gender)";
	$query = $db->prepare($sql);
	$query->execute(array(
		':firstname' => $firstname,
		':lastname' => $lastname,
		':gender' => $gender));

	$db = null;
	
	return true;
}
