<?php


// 30 Septiembre del 2018
// Action.php
// @brief Un action corresponde a una rutina de un modulo.

class Action {
	/**
	* @function load
	* @brief la funcion load carga una controlador correspondiente a un modulo
	**/	
	public static function load($action){
		// Module::$module;
		
		if(!isset($_GET['action'])){
			include "core/app/controller_syst/".$action."-action.php";
		}else{


			if(Action::isValid()){
				include "core/app/controller_syst/".$_GET['action']."-action.php";				
			}else{
				Action::Error("<b>404 NOT FOUND</b> Action <b>".$_GET['action']."</b> folder  !! - <a href='#' target='_blank'>Help</a>");
			}



		}
	}

	/**
	* @function isValid
	* @brief valida la existencia de una vista
	**/	
	public static function isValid(){
		$valid=false;
		if(file_exists($file = "core/app/controller_syst/".$_GET['action']."-action.php")){
			$valid = true;
		}
		return $valid;
	}

	public static function Error($message){
		print $message;
	}

	public function execute($action,$params){
		$fullpath =  "core/app/controller_syst/".$action."-action.php";
		if(file_exists($fullpath)){
			include $fullpath;
		}else{
			assert("wtf");
		}
	}

}



?>