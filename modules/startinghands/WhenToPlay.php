<?php
/**
 * Works out when you should play a hand. There is probably a much
 * cleaner way to do this, but this is functional, for now.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

/**
 * Work out when to play a hand.
 *
 * @param Hand $hand Hand the user currently has
 * @return int Constant value representing what position it is playable from
 */
function WhenToPlay ($hand) {

	// save card values
	$val1 = $hand->highestValue();
	$val2 = $hand->lowestValue();
	
	if ($hand->isPair()) {
	
		// pair
		if ($val1 >= 7) {
			return POSITION_EARLY;
		} elseif ($val1 >= 5) {
			return POSITION_MID;
		} else {
			return POSITION_LATE;
		}
	
	} elseif ($hand->isSuited()) {
	
		// suited
		if ($val1 == 14) {
			// ace
			if ($val2 > 9) {
				return POSITION_EARLY;
			} elseif ($val2 > 5) {
				return POSITION_MID;
			} else {
				return POSITION_LATE;
			}
		} elseif ($val1 == 13) {
			// king
			if ($val2 > 9) {
				return POSITION_EARLY;
			} elseif ($val2 > 8) {
				return POSITION_MID;
			} else {
				return POSITION_LATE;
			}
		} elseif ($val1 == 12) {
			// queen
			if ($val2 > 9) {
				return POSITION_EARLY;
			} elseif ($val2 > 7) {
				return POSITION_MID;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 11) {
			// jack
			if ($val2 > 8) {
				return POSITION_EARLY;
			} elseif ($val2 > 7) {
				return POSITION_MID;
			} elseif ($val2 > 6) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 10) {
			// 10
			if ($val2 > 8) {
				return POSITION_EARLY;
			} elseif ($val2 > 7) {
				return POSITION_MID;
			} elseif ($val2 > 6) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 9) {
			// 9
			if ($val2 > 7) {
				return POSITION_MID;
			} elseif ($val2 > 5) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 8) {
			// 8
			if ($val2 > 5) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 7) {
			// 7
			if ($val2 > 4) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 6) {
			// 6
			if ($val2 > 4) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 5) {
			// 5
			if ($val2 > 3) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} else {
			return POSITION_NEVER;
		}
	
	} else {
	
		// we've got nothing
		if ($val1 == 14) {
			// ace
			if ($val2 > 9) {
				return POSITION_EARLY;
			} elseif ($val2 > 6) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 13) {
			// king
			if ($val2 > 10) {
				return POSITION_EARLY;
			} elseif ($val2 > 9) {
				return POSITION_MID;
			} elseif ($val2 > 8) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 12) {
			// queen
			if ($val2 > 9) {
				return POSITION_MID;
			} elseif ($val2 > 8) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 11) {
			// jack
			if ($val2 > 9) {
				return POSITION_MID;
			} elseif ($val2 > 7) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 10) {
			// 10
			if ($val2 > 7) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 9) {
			// 9
			if ($val2 > 6) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} elseif ($val1 == 8) {
			// 8
			if ($val2 > 6) {
				return POSITION_LATE;
			} else {
				return POSITION_NEVER;
			}
		} else {
			return POSITION_NEVER;
		}
	
	}

}