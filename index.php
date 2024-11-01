<?php
/*
Plugin Name: Twitter Welcome Page Template
Plugin URI: http://inboundable.com/blog
Description: Automagically creates a Twitter welcome page template. For instructions, <a target="_blank" href="http://inboundable.com/blog/twitter-welcome-page-template">click here</a>. Inspired by @andrewchen and urged to copmletion by @noahkagan.
Version: 1.1
Author: Donnie Cooper
Author URI: http://inboundable.com
*/

/*This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

$twpt_plugginFile = __FILE__;
$twpt_plugin_dir = plugin_dir_path( __FILE__ );
$twpt_themeDir = get_template_directory();
$twpt_filename = '/created-by-twitter-welcome-page-template-plugin.php';
$twpt_file = $twpt_themeDir.$twpt_filename;


if (!file_exists($twpt_file)) {
	copy($twpt_plugin_dir.$twpt_filename, $twpt_file);
}

function twpt_myPlugginDeactivation() {
	global $twpt_file;
	if (file_exists($twpt_file)) {
		unlink($twpt_file);
	}
}
register_deactivation_hook($twpt_plugginFile, 'twpt_myPlugginDeactivation');


register_sidebar(array(
'name' => 'menu-twitter-welcome-page',
'before_widget' => '<div class="menu-twitter-welcome-page" style="padding:10px 0px;">',
'after_widget' => '</div>',
'before_title'  => '',
'after_title'   => ''
));

register_sidebar(array(
'name' => 'analytics-twitter-welcome-page',
'before_widget' => '',
'after_widget' => '',
'before_title'  => '',
'after_title'   => ''
));

register_sidebar(array(
'name' => 'footer-twitter-welcome-page',
'before_widget' => '',
'after_widget' => '',
'before_title'  => '',
'after_title'   => ''
));

?>