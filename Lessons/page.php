<html>
<body>

<?php $num_of_player = $_POST["num"]; ?> 

<?php echo $num_of_player; ?> Players<br><br>

<?php
$players = array();


for($x=0;$x<$num_of_player;$x++){
	for($y=0;$y<5;$y++){
		$players[$x][$y]="player".$x;
		echo $players[$x][$y]."<br>";//add card into the 
	};
}
?>

</body>
</html>