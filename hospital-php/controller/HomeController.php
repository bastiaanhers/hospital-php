<?php
require(ROOT . "model/PatientModel.php");

function index()
{
	render("home/index", 
	array('patients' => getAllPatients() ),	
	array('species' => getAllSpecies() ));	
}