<?php
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
		<b>Password</b>  
		<input type=\"text\" name=\"psd\" placeholder=\"No input means no setting\">
		<br><br>
		<input type=\"submit\" value=\" > Creat \">
		</form>
		</center>
		</td>

		<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>
		<td></td><td></td><td></td><td></td><td></td><td></td><td></td>

		<td>
		<center>
		<h2>View and Edit</h2>
		<br>
		<form action=\"/jump.php\" method=\"post\">
		<br>
		<b>ID</b>  
		<input type=\"number\" name=\"sid\">
		<br><br>
		<input type=\"submit\" value=\" > Go \">
		</form>
		</center>
		</td></tr>
		</table>
		<br><br><br>
		<a href=\"/?type=view&id=1\"> Need help? </a>
		</center>
		<br>
	</div>
	<br><br><br>
	<div>
		<center>
		<hr width=\"90%\">
		<br><br>
		Made by <b>LanGongINC &bull; LanGongDEV &bull; LanGongOnline</b>
		<br>
		&copy; 2020 LanGongINC
		</center>
		<br>
	</div>
</div>
";
?>
