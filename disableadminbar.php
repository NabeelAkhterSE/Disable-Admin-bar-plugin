/**
 * Plugin Name: DBA
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Author:            Nabeel Akhter
 * License:           GPL v2 or later
 */

 <?php  
// Remove the admin bar from the front end
add_filter( 'show_admin_bar', '__return_false' );
 ?>