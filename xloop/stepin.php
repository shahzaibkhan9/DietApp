<?php
session_start();
include_once('mainclass.php');
$obj = new xloop();
$q = $obj->getUserData(1);
mysqli_num_rows($q) <= 0 ? die("No Record Found") : 'ok';
foreach($q as $a){
	// echo "<pre>";
	// print_r($a);
	$_SESSION["rm_user_id"] = $a['user_id'];
	$_SESSION["rm_user_name"] = $a['username'];
	$_SESSION["rm_full_name"] = $a['full_name'];
	$_SESSION["rm_user_gender"]= ucfirst($a['gender']);
	// echo "</pre>";
}
?>