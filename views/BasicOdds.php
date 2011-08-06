<?php
/**
 * Basic Odds.
 *
 * Builds a table of simple odds.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

// include all the files
loadModule("basicodds");

// create a series of objects
$deal = new DealOdds();
$flop = new FlopOdds();
$turn = new TurnOdds();
$river = new RiverOdds();

// function for formatting probabilities
function formatProb ($prob) {
	if ($prob == -1) {
		return "Unknown";
	} else {
		$prob = (round($prob, 4) * 100);
		return $prob."%";
	}
}

// build array of probabilites
$probabilities = array (
	array(
		"Pair",
		formatProb($deal->pair()),
		formatProb($flop->pair()),
		formatProb($turn->pair()),
		formatProb($river->pair())
	),
	array(
		"Two pair", 
		formatProb($deal->twoPair()),
		formatProb($flop->twoPair()),
		formatProb($turn->twoPair()),
		formatProb($river->twoPair())
	),
	array(
		"Three of a kind",
		formatProb($deal->threeOfAKind()),
		formatProb($flop->threeOfAKind()),
		formatProb($turn->threeOfAKind()),
		formatProb($river->threeOfAKind())
	),
	array(
		"Straight",
		formatProb($deal->straight()),
		formatProb($flop->straight()),
		formatProb($turn->straight()),
		formatProb($river->straight())
	),
	array(
		"Flush",
		formatProb($deal->flush()),
		formatProb($flop->flush()),
		formatProb($turn->flush()),
		formatProb($river->flush())
	),
	array(
		"Full house",
		formatProb($deal->fullHouse()),
		formatProb($flop->fullHouse()),
		formatProb($turn->fullHouse()),
		formatProb($river->fullHouse())
	),
	array(
		"Four of a kind",
		formatProb($deal->fourOfAKind()),
		formatProb($flop->fourOfAKind()),
		formatProb($turn->fourOfAKind()),
		formatProb($river->fourOfAKind())
	),
	array(
		"Straight flush",
		formatProb($deal->straightFlush()),
		formatProb($flop->straightFlush()),
		formatProb($turn->straightFlush()),
		formatProb($river->straightFlush())
	)
);

// build template
$smarty->assign("probabilities", $probabilities);
$smarty->display("BasicOdds.tpl");