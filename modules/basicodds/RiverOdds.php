<?php
/**
 * Probabilities on the river.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

class RiverOdds implements BasicOdds {

	public function pair () {
		return (1/2.4);
	}
	
	public function twoPair () {
		return (1/20);
	}
	
	public function threeOfAKind () {
		return (1/46);
	}
	
	public function straight () {
		return (1/254);
	}
	
	public function flush () {
		return (1/508);
	}
	
	public function fullHouse () {
		return (1/693);
	}
	
	public function fourOfAKind () {
		return (1/4164);
	}
	
	public function straightFlush () {
		return (1/72192);
	}

}