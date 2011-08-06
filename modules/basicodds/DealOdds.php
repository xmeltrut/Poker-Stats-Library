<?php
/**
 * Odds on the deal.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

class DealOdds implements BasicOdds {

	public function pair () {
		return (1 / 13);
	}
	
	public function twoPair () {
		return 0;
	}
	
	public function threeOfAKind () {
		return 0;
	}
	
	public function straight () {
		return 0;
	}
	
	public function flush () {
		return 0;
	}
	
	public function fullHouse () {
		return 0;
	}
	
	public function fourOfAKind () {
		return 0;
	}
	
	public function straightFlush () {
		return 0;
	}

}