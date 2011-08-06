<?php
/**
 * Starting Hands.
 *
 * Teaches a user whether they should play a hand or not.  They
 * are dealt a hand, and asked what position (if any) they should
 * play it from.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

// include files
loadModule("startinghands");

// create a deck
$deck = new Deck();

// deal a hand
$hand = $deck->dealHand();

// what position should we play from
$position = whenToPlay($hand);

// build template
$smarty->assign("card1Path", $hand->card1()->getImage());
$smarty->assign("card2Path", $hand->card2()->getImage());
$smarty->assign("positionToPlay", $position);
$smarty->display("StartingHands.tpl");