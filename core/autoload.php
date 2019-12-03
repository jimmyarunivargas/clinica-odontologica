<?php
/**
* @author coditecno.corp
* @brief Llama todos los archivos del framework LegoBox
**/

include "controller/Core.php";
include "controller/Module.php";
//# include "controller/Session.php"; [remplazada]

include "controller/forms/lbForm.php";
include "controller/forms/lbInputText.php";
include "controller/forms/lbInputPassword.php";
include "controller/forms/lbValidator.php";

// 25 Septiembre 2018
include "controller/Model.php";
include "controller/Bootload.php";
include "controller/Action.php";

// 25 Septiembre 2018
include "controller/Request.php";


// 25 Septiembre 2018
include "controller/Get.php";
include "controller/Cookie.php";
include "controller/Lb.php";

//*********************************
//CONTROLADORES PROPIOS DEL SISTEMA SAFCI (Citas Medicas)
include "app/controller_syst/View.php";			//Configuracion de las Vistas
include "app/controller_syst/Session.php";		// Manejo de SESIONES de usuario
include "app/controller_syst/Database.php";		//Configuracion conexion a la BASE DE DATO
include "app/controller_syst/Executor.php";		//ejecuta y devuelve consultas SQL

?>