
<?php
//assoc array can't have the same key hold multiple value, it won't work for this situation
//$test=array("3"=>"4","4"=>"4","5"=>"4","6"=>"4","7"=>"4","8"=>"4","9"=>"4",);
$test=array("5"=>"4","5"=>"3","5"=>"2","6"=>"4","7"=>"4","8"=>"4","9"=>"4",);
//$test=array("4"=>"4","6"=>"4","3"=>"4","7"=>"4","8"=>"4","9"=>"4","5"=>"4",);

$keys = array_keys($test);
sort($keys);
//sort($test);

print_r($keys);
//Array ( [0] => 3 [1] => 4 [2] => 5 [3] => 6 [4] => 7 [5] => 8 [6] => 9 ) 
//print_r($test);
//Array ( [0] => 4 [1] => 4 [2] => 4 [3] => 4 [4] => 4 [5] => 4 [6] => 4 ) 

echo $test['5'];
?>
