<!DOCTYPE html>
<html>
	<head>

		<!--- Katex Includes -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.css" integrity="sha384-zB1R0rpPzHqg7Kpt0Aljp8JPLqbXI3bhnPWROx27a9N0Ll6ZP/+DiW/UqRcLbRjq" crossorigin="anonymous">
		<script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/katex.min.js" integrity="sha384-y23I5Q6l+B6vatafAwxRu/0oK/79VlbSz7Q9aiSZUvyWYIYsd+qj+o24G5ZU2zJz" crossorigin="anonymous"></script>
		<script defer src="https://cdn.jsdelivr.net/npm/katex@0.11.1/dist/contrib/auto-render.min.js" integrity="sha384-kWPLUVMOks5AQFrykwIup5lo0m3iMkkHrD0uJ4H5cjeGihAutqP0yW0J6dpFiVkI" crossorigin="anonymous" onload="renderMathInElement(document.body);">
		</script>
		<?php 
		include "katex/katex.php";
		include "markhtml/markhtml.php";
		?>
		<!--- End -->

		<!-- Share -->
		<script src="https://cdn.bootcss.com/clipboard.js/2.0.1/clipboard.js"></script>
		<?php
		$id=$_GET['id'];
		$share="<button class=\"btn\" onclick=\"alert('Copied!\\nYou can copy to the browser to access!')\" data-clipboard-text=\"http://victorwoo.synology.me:567/?type=view&id=$id\">  Share  </button>";
		?>	
		<!-- End -->

		<!-- Prism.js -->
		<link rel="stylesheet" href="prism.css" />
		<script src="prism.js"></script>
		<!-- End -->

		<?php
		$pid=trim($_GET['id']);
		$type=trim($_GET['type']);
		
		
		?>



		<!-- Main styles -->
		<style>
		.pages{
			width:90%;
			margin: 0 auto;
			/*border-style: solid solid solid solid;
			border-width: 1px;*/
		}
		.head{
			width:90%;
			margin: 0 auto;
			padding-left: 17px;
		}
		.pg2{
			background-color:#eeeeee;
			width:90%;
			margin: 0 auto;
		}
		</style>
		<!-- End -->

		<?php
		include "get.php";
		
		$pid=str_replace(".php","",$pid);
		if(trim($pid)=="" || trim($type)==""){
			include "hello.php";
			die("");
		}

		$page="";
		$f=fopen("doc/".$pid.".md","r") or die("<script>window.location.href=\"/\";</script>");
		$title=trim(fgets($f));
		while(!feof($f)){
			$page=$page.trim(fgets($f))."\n";
		}
		$edpg=$page;
		$page=markhtml($page);
		

		if($type=="")$tit="NoteText";
		else if($type=="view")$tit=$title." | NoteText";
		else if($type=="edit")$tit=$title." | NoteText";
		else $tit="Login | NoteText";
		?>


		<title><?php echo $tit;?></title>

		
	</head>
	<body>
		<div class="head"><h1>LanGong NoteText Online</h1></div>
		<hr width="92%" >
		<br><br>
		<div class="pg2">
			<br>
			<div class="pages">
				<?php
				if(trim($type)=="view"){
					echo "<h2>$title</h2><br>";
					echo $page;
					echo "<br><br>
					<center>
					<input type=\"button\" onclick=\"javascrtpt:window.location.href='/'\" value=\" < Home \">
					".$share."
					<input type=\"button\" onclick=\"javascrtpt:window.location.href='/?type=edit&id=$pid'\" value=\" > Edit \">
					</center>
					";
				}
				else if(trim($type)=="checkin"){
					$id=$_GET['id'];
					$pd=$_POST['td'];
					//include "get.php";
					
					if($fileio->getline("psd/".trim($id),"1")==trim($pd)){
						//$_COOKIE['lg']=$id;
						setcookie("lg",$id);
						echo "<script>window.location.href=\"/?type=edit&id=".$id."\";</script>";
						$miss = 0;
					}
					else{
						echo "
						<center>
						<h2>Login</h2>
						<br>Password Error<br>
						<form action=\"?type=checkin&id=".$pid."\" method=\"post\">
						<br>
						<b>Password</b>  
						<input type=\"password\" name=\"td\">
						<br><br>
						<input type=\"button\" onclick=\"javascrtpt:window.location.href='/'\" value=\" < Home \">
						<input type=\"submit\" value=\" Go \">
						</form>
						</center>
						";
					}
				}
				else if(trim($type)=="edit"){
					if($_COOKIE['lg']!=$pid){
						//echo $_COOKIE['lg'];
						echo "<script>window.location.href=\"/?type=login&id=".$pid."\";</script>";
					}
					else{
						echo "
						<center>
						<h2>$title</h2>
						<form action=\"update.php?id=".$pid."\" method=\"post\">
						<br>
						<textarea name=\"val\" rows=\"20\" cols=\"80\">$title\n\n$edpg</textarea>
						<br><br>The title of the note is on <B>line 1</B><br><br>
						<input type=\"button\" onclick=\"javascrtpt:window.location.href='/?type=view&id=$pid'\" value=\" < Back \">
						<input type=\"submit\" value=\" > Save \">
						</form>
						
						</center>
						";
					}
				}
				else if(trim($type)=="login"){
					echo "
					<center>
					<h2>Login</h2>
					<form action=\"?type=checkin&id=".$pid."\" method=\"post\">
					<br>
					<b>Password</b>  
					<input type=\"password\" name=\"td\">
					<br><br>
					<input type=\"button\" onclick=\"javascrtpt:window.location.href='/'\" value=\" < Home \">
					<input type=\"submit\" value=\" Go \">
					</form>
					</center>
					";
				}
				?>
			</div>
			<br>
			<br><br>
			<div>
				<center>
				<hr width="90%">
				<br><br>
				Made by <b>LanGongINC &bull; LanGongDEV &bull; LanGongOnline</b>
				<br>
				&copy; 2020 LanGongINC
				</center>
				<br>
			</div>
		</div>
		<script type="text/javascript">
			new ClipboardJS('.btn');
		</script>
	</body>
</html>
