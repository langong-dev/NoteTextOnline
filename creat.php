<?php
$psd=$_POST['psd'];
include "get.php";
$la=$fileio->getline("doc/name",1);
$fn=fopen("doc/name","w");
fwrite($fn,$la+1);
fclose($fn);

$sc=$la+1;
$fn=fopen("doc/".$sc.".md","w");
fwrite($fn,"# Welcome to Use NoteText!\n\nYou can use **Markdown** and **KaTeX**.\n");
fclose($fn);

$fn=fopen("psd/".$sc,"w");
fwrite($fn,$psd);
fclose($fn);

echo "<script>window.location.href='/?type=edit&id=$sc'</script>";

?>