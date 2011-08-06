<?php
/**
 * Tells you whether you should play a starting hand.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

if (isset($_GET["card1"])) {

	// making an AJAX request
	loadModule("startinghands");
	
	// get cards supplied
	$card1Str = $_GET["card1"];
	$card2Str = $_GET["card2"];
	
	// build card objects
	$card1 = new Card(substr($card1Str, 0, 1), substr($card1Str, 1));
	$card2 = new Card(substr($card2Str, 0, 1), substr($card2Str, 1));
	
	// put them into a hand
	$hand = new Hand($card1, $card2);
	
	// should we play this hand?
	$position = WhenToPlay($hand);
	
	// output the position to play from
	echo($POSITIONS[$position]);

} else {

	// build an array of card types
	$CARD_TYPES = array (
		array("name" => "Ace", "value" => 14),
		array("name" => "King", "value" => 13),
		array("name" => "Queen", "value" => 12),
		array("name" => "Jack", "value" => 11),
		array("name" => "10", "value" => 10),
		array("name" => "9", "value" => 9),
		array("name" => "8", "value" => 8),
		array("name" => "7", "value" => 7),
		array("name" => "6", "value" => 6),
		array("name" => "5", "value" => 5),
		array("name" => "4", "value" => 4),
		array("name" => "3", "value" => 3),
		array("name" => "2", "value" => 2)
	);
	
	$smarty->assign("rows", $CARD_TYPES);
	$smarty->display("LiveStart.tpl");

}