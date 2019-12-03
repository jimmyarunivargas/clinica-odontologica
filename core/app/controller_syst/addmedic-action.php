<?php
/**
* @author coditecno.corp
**/

if(count($_POST)>0){				//comprobamos que si o si haya una categoria
	$user = new MedicData();		//Instanciamos un objeto con la clase MedicData
	$category_id = "NULL";
	// Obteiene los datos enviados por el metodo POST
	if($_POST["category_id"]!="")
	{ 
		$category_id = $_POST["category_id"]; 
	}
	$user->name = $_POST["name"];
	$user->category_id = $category_id;
	$user->lastname = $_POST["lastname"];
	$user->address = $_POST["address"];
	$user->email = $_POST["email"];
	$user->phone = $_POST["phone"];
	$user->add();		// Ejecuta el metodo add para cargar en la Base de Dato

print "<script>window.location='index.php?view=medics';</script>";// direcciona a la vista Medics


}


?>