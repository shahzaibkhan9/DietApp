<?php
include_once('xloop/stepin.php');
$obj->resetuserlog($_GET['uid']);
header("Location: index.php");
?>