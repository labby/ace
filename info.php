<?php

/**
 * @module   	    ace
 * @version        	see info.php of this module
 * @author			LEPTON Project
 * @copyright 		2010-2015 LEPTON Project
 * @license        	BSD License
 * @license terms  	see info.php of this module
 * @platform       	see info.php of this module
 *
 */

// include class.secure.php to protect this file and the whole CMS!
if ( defined( 'LEPTON_PATH' ) )
{
	include( LEPTON_PATH . '/framework/class.secure.php' );
} //defined( 'LEPTON_PATH' )
else
{
	$oneback = "../";
	$root    = $oneback;
	$level   = 1;
	while ( ( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) ) )
	{
		$root .= $oneback;
		$level += 1;
	} //( $level < 10 ) && ( !file_exists( $root . '/framework/class.secure.php' ) )
	if ( file_exists( $root . '/framework/class.secure.php' ) )
	{
		include( $root . '/framework/class.secure.php' );
	} //file_exists( $root . '/framework/class.secure.php' )
	else
	{
		trigger_error( sprintf( "[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER[ 'SCRIPT_NAME' ] ), E_USER_ERROR );
	}
}
// end include class.secure.php

$module_directory	= 'ace';
$module_name		= 'Ace Editor';
$module_function 	= 'WYSIWYG';
$module_version 	= '0.1.0';
$module_platform 	= '1.x';
$module_delete 		=  false;
$module_author 		= 'LEPTON Project';
$module_license 	= '<a href="http://opensource.org/licenses/bsd-license.php" target="_blank">BSD License</a>';
$module_license_terms 	= '-';
$module_description = 'Small and easy code editor';
$module_home 		= 'http://ace.c9.io/#nav=about';
$module_guid 		= 'd6976952-78c4-40dc-bebc-d2c7baae7ee5';

?>