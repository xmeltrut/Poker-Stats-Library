<?php
/**
 * This is an interface for the basic odds objects.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

interface BasicOdds {

	public function pair();
	public function twoPair();
	public function threeOfAKind();
	public function straight();
	public function flush();
	public function fullHouse();
	public function fourOfAKind();
	public function straightFlush();

}
