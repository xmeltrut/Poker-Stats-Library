<?php
/**
 * Simple pot odds calculator.
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

// has the form been submitted?
if (isset($_POST["act"])) {
	
	// get values
	$pot = floatval($_POST["pot"]);
	$call = floatval($_POST["call"]);
	
	// assign to form
	$smarty->assign("potSize", $pot);
	$smarty->assign("priceToCall", $call);
	
	// work out value
	$value = round((($call / $pot) * 100), 2);
	$smarty->assign("value", $value);

} else {

	$smarty->assign("potSize", "");
	$smarty->assign("priceToCall", "");
	$smarty->assign("value", false);

}

// build template
$smarty->display("PotOdds.tpl");