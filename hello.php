<?php

$errlang=array(
	"",
	"Note Not Found",

	""
);

echo "
<title>NoteText | LanGongDEV</title>
<div class=\"head\"><h1>LanGong NoteText Online</h1></div>
<hr width=\"92%\" >
<br><br>
<div class=\"pg2\">
	<br>
	<div class=\"pages\">
		<center><h1>Welcome</h1>
		<table>
		<tr><td>
		<center>
		<h2>Creat a New Note</h2>
		<br>
		<form action=\"/creat.php\" method=\"post\">
		<br>
		<div class=\"input\">
		<input type=\"text\" name=\"psd\" placeholder=\"Set a password\">
		</div>
		<br><br>
		<div class=\"b\">
		<input type=\"submit\" value=\" > Creat \">
		</div>
		</form>
		</center>
		</td>

		<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		<td></td><td></td><td></td><td></td><td></td><td></td><td></td>

		<td>
		<center>
		<h2>View and Edit</h2>
		
		<form action=\"/jump.php\" method=\"post\">
		<br><br>
		<div class=\"input\">
		<input type=\"number\" name=\"sid\" placeholder=\"";

if($error == "")
	echo "Input your note ID";
if($error == 1)
	echo $errlang[1];

echo "\">
		</div>
		<br><br>
		<div class=\"b\">
		<input type=\"submit\" value=\" > Go \">
		</div>
		</form>
		</center>
		</td></tr>
		</table>
		<br><br><br>
		<div class=\"b\">
		<input type=\"button\" value=\" Need help? \" onclick=\"window.location.href='/?type=view&id=1'\" >
		</div>
		</center>
		<br>
	</div>
	<br><br><br>
";
include "foot.php";
echo"
</div>
";
?>
