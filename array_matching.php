<?php

//compare algorithm, key is to look for patterns

//Straigh flush > four of the kinds > Full house > flush > straight > three of the kind > Two pair > One Pair > high car

// look for flush, card with same suit
// put the array element into value temp1, temp2, temp3, temp4, temp5
//loop through 5 times, match .4, .3, .2, .1, 

// look for snake, all five card in sequence
// look for four of the kinds
// look for three cards of the kinds
// look for stright flush, card with same suit plus in sequence
// look for full house, 3 card of the same
// look for pairs
//if all else compare biggest number of the array win

$a=array("a"=>"5","b"=>5,"c"=>"5");
echo array_search(5,$a);
?>