<?php
/**
 * Constants
 */

$constants = array (
	"POSITION_NEVER" => 0,
	"POSITION_LATE" => 1,
	"POSITION_MID" => 2,
	"POSITION_EARLY" => 3
);

// convert into constants
foreach ($constants as $key => $val) {
	define($key, $val);
}

// array constants

$POSITIONS = array (
	0 => "Never",
	1 => "Late",
	2 => "Mid",
	3 => "Early"
);