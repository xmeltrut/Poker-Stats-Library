<?php
/**
 * Front Controller.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

// include files
include("library/constants.php");
include("library/general.php");

// include objects until autoloading works
include("objects/Card.php");
include("objects/Deck.php");
include("objects/Hand.php");

// create a template object
include("library/smarty.php");
$smarty = new SmartyWrapper();

// get page name
$page = isset($_GET["page"]) ? $_GET["page"] : false;

// switch page requests
switch ($page) {
	case "BasicOdds":
		include("views/Basicodds.php");
		break;
	case "LiveStart":
		include("views/LiveStart.php");
		break;
	case "PotOdds":
		include("views/PotOdds.php");
		break;
	case "StartingHands":
		include("views/StartingHands.php");
		break;
	default:
		include("views/Welcome.php");
}