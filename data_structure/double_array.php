<?php
$player1 = array("1.2","2.3","3.4");
$player2 = array("4.2","5.3","6.4");
$player3 = array("7.2","6.3","9.4");

$players = array($player1,$player2,$player3);
//how to manipulate multi dimensional array
for($x=0;$x<3;$x++){
	for($y=0;$y<3;$y++){
		echo $players[$x][$y]."<br>"; //create array and insert data can be done in here.. easy!!!!
	};
}

//print_r($players);

?>