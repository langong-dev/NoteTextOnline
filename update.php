<?php
echo "<title>Updating</title>";
$id=$_GET['id'];
$tit=$_POST['tit'];
$val=$_POST['val'];
if(trim($tit) == "")
  $tit="No name";
$f=fopen("doc/".$id.".md","w");
fwrite($f,trim($tit)."\n".trim($val));
fclose($f);
echo "<script>window.location.href=\"/?type=edit&id=".$id."\";</script>";
?>