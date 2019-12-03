<?php
/**
* @author coditecno.corp
**/

if(count($_POST)>0){
	$user = new CategoryData();
	$user->name = $_POST["name"];
	$user->add();
//direcciona a la vista categories
print "<script>window.location='index.php?view=categories';</script>";


}


?>