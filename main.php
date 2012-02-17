<?php
/**
 * Sets configuration variable
 * @param string $varname Name of the variable
 * @param mixed $newvalue Value to set
 */
function compat_ini_set($varname, $newvalue = TRUE) {
	if(!$newvalue)
		return;
		
	switch ($varname) {
		case 'register_long_arrays':
			compat_register_long_arrays();
			return TRUE;
		case 'register_globals':
			compat_register_globals();
			return TRUE;
		default:
			return FALSE;
	}
}

/**
 * Variable: register_long_arrays
 * Reason: deprecated since 5.3
 **/
function compat_register_long_arrays() {
	if(ini_get('register_long_arrays'))
		return;

	if(!isset($HTTP_SERVER_VARS))
		global $HTTP_SERVER_VARS; $HTTP_SERVER_VARS = $_SERVER;
	if(!isset($HTTP_POST_VARS))
		global $HTTP_POST_VARS; $HTTP_POST_VARS = $_POST;
	if(!isset($HTTP_ENV_VARS))
		global $HTTP_ENV_VARS; $HTTP_ENV_VARS = $_ENV;
	if(!isset($HTTP_GET_VARS))	
		global $HTTP_GET_VARS; $HTTP_GET_VARS = $_GET;
	if(!isset($HTTP_COOKIE_VARS) && isset($_COOKIE))
	{	global $HTTP_COOKIE_VARS; $HTTP_COOKIE_VARS = $_COOKIE; }
	if(!isset($HTTP_SESSION_VARS) && isset($_SESSION))
	{	global $HTTP_SESSION_VARS; $HTTP_SESSION_VARS = $_SESSION; }
	if(!isset($HTTP_POST_FILES))
		global $HTTP_POST_FILES; $HTTP_POST_FILES = $_FILES;
}

/**
 * Variable: register_globals
 * Reason: unsupported by ini_set runtime
 **/
function compat_register_globals() {
	if(ini_get('register_globals'))
		return;
	
	foreach($_REQUEST as $key => $value)
		if(!isset($$key)){
			global $$key;
			$$key = $value;
		}
}

?>