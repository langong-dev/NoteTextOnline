<?php
require_once('markdown_extended.php');

function markhtml($mark){
	$html=MarkdownExtended($mark);
	//katex_start();
	$ktx="";
	$res="";
	for($i=0;$i<strlen($html);$i++){
		if($html[$i]=='$'){
			for($j=$i+1;$j<strlen($html);$j++){
				if($html[$j]=='$')break;
				$ktx[$j]=$html[$j];
			}
			$res=$res.katex($ktx);
			$ktx="";
			$i=$j;
			continue;
		}
		$res=$res.$html[$i];
	}
	return $res;
}
?>
