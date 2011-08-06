<?php
/**
 * Odds on the flop.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 * @todo Finish implementing
 */

class FlopOdds implements BasicOdds {

	public function pair () {
	
		// take your first card, do any of the other four match?
		$odds = ((1 / 14) * 4);
		
		// how about the second card?
		$odds += ((4 / 55) * 4);
		
		// return end probability
		return $odds;
	
	}
	
	public function twoPair () {
		return -1;
	}
	
	public function threeOfAKind () {
	
		// first card can be anythings
		$odds = 1;
		
		// now, everything needs to match
		$odds *= ((1 / 14) * 4);
		$odds *= ((1 / 14) * 3);
		
		// return end probability
		return $odds;
	
	}
	
	public function straight () {
		return - 1;
	}
	
	public function flush () {
	
		// first card can be anything
		$odds = 1;
		
		// now everything needs to match the suite
		$odds *= (1 / 4);
		$odds *= (1 / 4);
		$odds *= (1 / 4);
		$odds *= (1 / 4);
		
		// return end probability
		return $odds;
	
	}
	
	public function fullHouse () {
		return -1;
	}
	
	public function fourOfAKind () {
	
		// first card can be anythings
		$odds = 1;
		
		// now, everything needs to match
		$odds *= ((1 / 14) * 4);
		$odds *= ((1 / 14) * 3);
		$odds *= ((1 / 14) * 2);
		
		// return end probability
		return $odds;
	
	}
	
	public function straightFlush () {
	
		// first, we just need to hit any 10-A
		$odds = ((1 / 14) * 5);
		
		// now we need to hit any of the other four of that suite
		$odds *= ((1 / 55) * 4);
		$odds *= ((1 / 53) * 3);
		$odds *= ((1 / 52) * 2);
		$odds *= ((1 / 51) * 1);
		
		// return end probability
		return $odds;
	
	}

}