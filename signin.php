<?php
$id=$_GET['id'];
$pd=$_POST['td'];
include "get.php";
if($fileio->getline("psd/".trim($id),"1")==trim($pd)){
	//$_COOKIE['lg']=$id;
	setcookie("lg",$id);
	echo "<script>window.location.href=\"/?type=edit&id=".$id."\";</script>";
}
else{
	die("<center><h1>Password Error</h1><br><input type=\"button\" onclick=\"javascrtpt:window.location.href='/?id=$id&type=login'\" value=\" < Login Again \">");
}
?>