<?php
   /*
   Plugin Name: Eagley
   Description: Custom Eagley functionality
   Version: 0.1
   Author: Chris Atty
   */
?>
<?php
include 'twitter_widget.php';
include 'event_post_meta.php';
include 'admin_help_page.php';

define( 'EAGLEY_PLUGIN', __FILE__ );

wp_enqueue_style( 'eagley', plugins_url( 'public/eagley.css', EAGLEY_PLUGIN ), array("mythemes-style"));
