<?php
/**
 * Smarty wrapper class
 *
 * @author Chris Worfolk <xmeltrut@gmail.com>
 */

include("smarty/Smarty.class.php");

class SmartyWrapper extends Smarty {

	function __construct () {
		parent::__construct();
		$this->force_compile = true;
	}

}