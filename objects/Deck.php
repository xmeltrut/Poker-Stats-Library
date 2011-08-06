<?php
/**
 * Representation of a deck.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

class Deck {

	private $cards = array();
	
	/**
	 * Constuctor. Builds the deck.
	 */
	function __construct () {
	
		// build an array of suites
		$suites = array("H", "D", "C", "S");
		
		foreach ($suites as $suite) {
			for ($i = 2; $i <= 14; $i++) {
				$card = new Card($suite, $i);
				$this->cards[] = $card;
			}
		}
	
	}
	
	/**
	 * Deal a card from the deck.
	 *
	 * @return Card
	 */
	public function dealCard () {
		$cards = count($this->cards);
		$indexToDeal = rand(0, ($cards - 1));
		$card = $this->cards[$indexToDeal];
		unset($this->cards[$indexToDeal]);
		return $card;
	}
	
	/**
	 * Deal a hand and return it as an object.
	 *
	 * @return Hand
	 */
	public function dealHand() {
		$card1 = $this->dealCard();
		$card2 = $this->dealCard();
		$hand = new Hand($card1, $card2);
		return $hand;
	}

}