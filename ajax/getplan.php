<?php
include('../xloop/mainclass.php');
$obj= new xloop();
$result = $obj->getPlan($_POST['bmr'],$_POST['uid']);
$arr;
foreach($result as $r){
    $arr[] = $r;
}
echo json_encode($arr);
?>