<?php
$num=$_POST['sid'];
if($num==""){
	echo "<script>window.location.href='/'</script>";
}
else{
	echo "<script>window.location.href='/?type=view&id=$num'</script>";
}
?>