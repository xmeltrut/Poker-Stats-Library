<?php
/**
 * Representation of a card.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

class Card {

	private $suit;
	private $value;
	
	/**
	 * Constructor
	 */
	function __construct ($suit, $value) {
	
		$this->setSuit($suit);
		$this->setValue($value);
	
	}
	
	/**
	 * Get the path to the image.
	 */
	public function getImage () {
	
		// firstly, invert the value
		$invert = (15 - $this->value);
		
		// times by the suite
		$suitCoefficients = array (
			"C" => 3,
			"S" => 2,
			"H" => 1,
			"D" => 0
		);
		
		// work out number
		$number = (($invert * 4) - $suitCoefficients[$this->getSuit()]);
		
		// build path
		$path = "images/classic-cards/" . $number . ".png";
		return $path;
	
	}
	
	/**
	 * Get suite
	 */
	public function getSuit () {
		return $this->suit;
	}
	
	/**
	 * Get value
	 */
	public function getValue () {
		return $this->value;
	}
	
	/**
	 * Set suite
	 */
	public function setSuit ($suit) {
		$this->suit = $suit;
	}
	
	/**
	 * Set value
	 */
	public function setValue ($value) {
		$this->value = $value;
	}

}