<?php
echo "<title>Updating</title>";
$id=$_GET['id'];
$val=$_POST['val'];
$f=fopen("doc/".$id.".md","w");
fwrite($f,trim($val));
fclose($f);
echo "<script>window.location.href=\"/?type=edit&id=".$id."\";</script>";
?>