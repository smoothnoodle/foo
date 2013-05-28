<?php
//in this situation, sort first to find royal flush, this route is not working with 
//$test = array("1.4","2.4","3.4","4.4","5.4","6.4","7.4");
$test = array("2.3","2.4","3.4","4.4","5.4","6.4","6.3");//it wouldn't work with my snake algorithm
$test = array("2.4","3.4","4.4","5.4","6.4","6.3","6.2");//it wouldn't work with my snake algorithm
sort($test);
print_r($test);

?>