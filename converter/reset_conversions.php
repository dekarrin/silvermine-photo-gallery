<?php
if (defined('IN_COPPERMINE')) {
	die();
}
define('IN_COPPERMINE', true);

include 'include/init.inc.php';
include 'include/video_convert.php';

cpg_db_query("UPDATE {$CONFIG['TABLE_CONVERSIONS']} SET status='".CONVERT_STATUS_READY."', error_message=NULL WHERE status='".CONVERT_STATUS_FAILURE."'");
?>
