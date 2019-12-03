<?php

// define('LBROOT',getcwd()); // LegoBox Root ... the server root
// include("core/controller/Database.php");

if(Session::getUID()=="") {
	$user = $_POST['mail'];
	$pass = sha1(md5($_POST['password']));
	$is_admin = $_POST['type_user'];

	$base = new Database();
	$con = $base->connect();
	 $sql = "select * from user where (email= \"".$user."\" or username= \"".$user."\") and password= \"".$pass."\" and is_active=1 and is_admin=".$is_admin;
	//print $sql;
	$query = $con->query($sql);
	$found = false;
	$userid = null;
	$is_admin = null;
	while($r = $query->fetch_array()){
		$found = true ;
		$userid = $r['id'];
		$is_admin = $r['is_admin'];
	}

	if($found==true) {
	//	print $userid;
		$_SESSION['user_id']=$userid;
		$_SESSION['admin'] = $is_admin;
	//	setcookie('userid',$userid);
	//	print $_SESSION['userid'];
		print "Cargando ... $user";
		print "<script>window.location='index.php?view=home';</script>";
	}else {
		print "<script>window.location='index.php?view=login';</script>";
	}

}else{
	print "<script>window.location='index.php?view=home';</script>";
	
}
?>