<?php
class filedo{
	public function getline($name, $lid){
		$file = fopen($name, "r") or die("Error.");
		for( $i = 0; $i < $lid; $i ++){
			$val = fgets($file);
		}
		return trim($val);
	}
	public function changeline($name,$cnum,$word){
		$num=0;
		$filename = fopen($name, "r") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "w") or die("Unable to open TIME!");
		while(!feof($filename)) {
			$k=trim(fgets($filename))."\n";
			$num++;
			if($num==$cnum){
				$k=$word."\n";
			}
			fwrite($filename1,$k);
		}
		fclose($filename);
		fclose($filename1);
		$num=0;
		$filename = fopen($name, "w") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "r") or die("Unable to open TIME!");
		while(!feof($filename1)) {
			$k=trim(fgets($filename1));
			if($k=="")break;
			$k=$k."\n";
			$num++;
			fwrite($filename,$k);
		}
		fclose($filename);
		fclose($filename1);
	}
	public function insertline($name,$cnum,$word){
		$num=0;
		$filename = fopen($name, "r") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "w") or die("Unable to open TIME!");
		while(!feof($filename)) {
			$k=trim(fgets($filename))."\n";
			$num++;
			if($num==$cnum){
				fwrite($filename1,$word."\n");
			}
			fwrite($filename1,$k);
		}
		fclose($filename);
		fclose($filename1);
		$num=0;
		$filename = fopen($name, "w") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "r") or die("Unable to open TIME!");
		while(!feof($filename1)) {
			$k=trim(fgets($filename1));
			if($k=="")break;
			$k=$k."\n";
			$num++;
			fwrite($filename,$k);
		}
		fclose($filename);
		fclose($filename1);
	}
	public function deleteline($name,$cnum){
		$num=0;
		$filename = fopen($name, "r") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "w") or die("Unable to open TIME!");
		while(!feof($filename)) {
			$k=trim(fgets($filename))."\n";
			$num++;
			if($num==$cnum){
				continue;
			}
			fwrite($filename1,$k);
		}
		fclose($filename);
		fclose($filename1);
		$num=0;
		$filename = fopen($name, "w") or die("Unable to open TIME!");
		$filename1 = fopen("temp.list", "r") or die("Unable to open TIME!");
		while(!feof($filename1)) {
			$k=trim(fgets($filename1));
			if($k=="")break;
			$k=$k."\n";
			$num++;
			fwrite($filename,$k);
		}
		fclose($filename);
		fclose($filename1);
	}
}
$fileio = new filedo();
?>