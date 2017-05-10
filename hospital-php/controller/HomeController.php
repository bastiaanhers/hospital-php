<?php
require(ROOT . "model/PatientModel.php");

function index()
{
	render("home/index", 
	array('patients' => getAllPatients() ),	
	array('species' => getAllSpecies() ));	
}
function patient_create()
{
	render("home/patient_create");	
}
function createSave()
{
	if (!createPatient()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "home/index");
}
function delete($id)
{
	if (!deletePatient($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "home/index");
}
