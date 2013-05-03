<?php
$suit = array("4","4","4","4","4");

function is_flush($suit){
//return 0=false, 1=true
	if(count(array_unique($suit)) == 1){
		return 1;
	}else{
		return 0;
	}
}

echo is_flush($suit);

?>