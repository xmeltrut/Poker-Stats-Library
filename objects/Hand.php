<?php
/**
 * Representation of a hand.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

class Hand {

	private $cards = array();
	
	/**
	 * Constructor. Builds the hand.
	 *
	 * @param Card $card1 First card in hand
	 * @param Card $card2 Second card in hand
	 */
	function __construct ($card1, $card2) {
	
		$this->cards = array (
			$card1,
			$card2
		);
	
	}
	
	/**
	 * Easy access getters for the cards.
	 */
	public function card1 () { return $this->cards[0]; }
	public function card2 () { return $this->cards[1]; }
	
	/**
	 * Return the highest value of a card in the hand.
	 *
	 * @return int Highest value
	 */
	public function highestValue () {
	
		if ($this->cards[0]->getValue() > $this->cards[1]->getValue()) {
			return $this->cards[0]->getValue();
		} else {
			return $this->cards[1]->getValue();
		}
	
	}
	
	/**
	 * Is this hand a pair?
	 * 
	 * @return boolean
	 */
	public function isPair () {
	
		if ($this->cards[0]->getValue() == $this->cards[1]->getValue()) {
			return true;
		} else {
			return false;
		}
	
	}
	
	/**
	 * Are these cards suited?
	 *
	 * @return boolean
	 */
	public function isSuited () {
	
		if ($this->cards[0]->getSuit() == $this->cards[1]->getSuit()) {
			return true;
		} else {
			return false;
		}
	
	}
	
	/**
	 * Return the lowest value of a card in the hand.
	 *
	 * @return int Lowest value
	 */
	public function lowestValue () {
	
		if ($this->cards[0]->getValue() < $this->cards[1]->getValue()) {
			return $this->cards[0]->getValue();
		} else {
			return $this->cards[1]->getValue();
		}
	
	}

}