<?php
// Autor: coditecno.corp
// autoload.php
// 27 Septiembre del 2018
// esta funcion elimina el hecho de estar agregando los modelos manualmente


function __autoload($modelname){
	if(Model::exists($modelname)){
		include Model::getFullPath($modelname);
	} 
}



?>