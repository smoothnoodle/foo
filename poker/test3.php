
<?php
$face = array("2","3","4","5","6","7","8");//correct, ** must check
//$face = array("2","3","4","5","6","6","6");//correct, ** must check
//$suit = array("4","4","4","4","3","2","1");//correct, ** must check
$suit = array("1","2","3","4","5","6","7");//testing slice
$test = array_slice($suit, 1, 5);//0,4 and 1,4 are the same? is this a bug? is there other way?
print_r($test);

?>