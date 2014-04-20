<?php
/**
* Config automatic background updates Uninstall
*
* Uninstalling Config automatic background updates delete options.
*/

// If uninstall not called from Wordpress exit 
if( !defined('WP_UNINSTALL_PLUGIN') ) exit();

delete_option('yslo_wpus_options');

if(current_user_can('delete_plugins')){	
	$role =& get_role('administrator');
	if(!empty($role)) {
			$role->add_cap('update_core');
			$role->add_cap('update_themes');
			$role->add_cap('update_plugins');
	}
}