<?php
require_once('markdown_extended.php');

function markhtml($mark){
	$res="";
	$ktx="";
	$code=1;
	for($i=0;$i<strlen($mark);$i++){
		if($mark[$i]=='$' && $code==1){
			for($j=$i+1;$j<strlen($mark);$j++){
				if($mark[$j]=='$')break;
				$ktx[$j-$i]=$mark[$j];
			}
			$res=$res.katex($ktx);
			$ktx="";
			$i=$j;
			continue;
		}
		if($mark[$i]=='`'){
			if($code==1)$code=0;
			else $code=1;
		}
		$res=$res.$mark[$i];
	}
	$html=MarkdownExtended($res);
	return $html;
}
?>
