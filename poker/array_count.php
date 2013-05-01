<?php
$suit1 = array("4","4","5","4","4");
if(count(array_unique($suit1)) == 1){
	echo "true";
}else{
	echo "false";
}

if (count(array_keys($suit1, '4')) == count($suit1)){
	echo "true";
}else{
	echo "false";
}

if(count(array_count_values($suit1)) == 1){
	echo "true";
}else{
	echo "false";
}


if($suit1 === array_fill(0, count($suit1), end($suit1))){
	echo "true";
}else{
	echo "false";
}
?>