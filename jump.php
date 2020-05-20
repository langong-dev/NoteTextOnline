<?php
include "get.php";
echo "<title>Please wait...</title>";
$num=$_POST['sid'];
if($num=="" || $num<=0 || $num>$fileio->getline("doc/name",1)){
	echo "<script>window.location.href='/?error=1'</script>";
}
else{
	echo "<script>window.location.href='/?type=view&id=$num'</script>";
}
?>