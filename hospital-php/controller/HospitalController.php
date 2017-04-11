<?php

require(ROOT . "model/HospitalModel.php");

function index()
{
	render("Hospital/index", array(
		'Hospital' => getAllHospital()
	));
}

function create()
{
	render("Hospital/create");
}

function createSave()
{
	if (!createHospital()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Hospital/index");
}

function edit($id)
{
	render("Hospital/edit", array(
		'Hospital' => getHospital($id)
	));
}

function editSave()
{
	if (!editHospital()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Hospital/index");
} 

function delete($id)
{
	if (!deleteHospital($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Hospital/index");
}
