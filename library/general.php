<?php
/**
 * General function library.
 */

/**
 * This allows us to automatically load in classes that are missing,
 * without having to specify them. Genius.
 *
 * @param string $className Name of class you're trying to use
 */
function __autoload ($className) {
	die("Autoload being called");
	//if (file_exists("objects/".$className.".php")) {
		include "objects/".$className.".php";
	//}
}

/**
 * Include all the files for a module.
 *
 * @param string $name Module name
 */
function loadModule ($name) {

	foreach (glob("modules/".$name."/*.php") as $filename) {
    	include $filename;
	}

}