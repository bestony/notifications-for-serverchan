<?php
/*
Plugin Name:  Notifications For ServerChan
Plugin URI:   https://wpstore.app/archives/notifications-for-serverchan/
Description:  A Notifications Plugin For <a href="http://sc.ftqq.com"> ServerChan </a>
Version:      0.1
Author:       Bestony
Author URI:   https://wpstore.app/
License:      GPLv3
License URI:  https://www.gnu.org/licenses/gpl-3.0.html
Text Domain:  notifications-for-serverchan
Domain Path:  /languages
 */

include_once 'admin/init.php';
include_once 'events/init.php';
include_once 'inc/ServerChan.php';

use ServerChan;

add_action('init', 'notifications_sc_load_textdomain');
function notifications_sc_load_textdomain() {
	load_plugin_textdomain('notifications-for-serverchan', false, basename(dirname(__FILE__)) . '/languages');
}