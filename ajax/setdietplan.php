<?php
include('../xloop/mainclass.php');
$obj= new xloop();
$obj->setPlan($_POST['calories'],$_POST['target_weight'],$_POST['progress'],$_POST['date'],$_POST['uid']);
echo "Successfully Inserted";
?>