<?php
/*
  Plugin Name: Extended Toolbar
  Plugin URI: http://scm.schneidr.de
  Description: Adds useful entries to the toolbar
  Author: Gerald Schneider
  Author URI: http://schneidr.de
  Text Domain: extended-toolbar
  Version: 0.1
*/
class ExtToolbar {

	function __construct() {
		add_action( "admin_bar_menu", array( $this, 'add_entries' ), 999 );
	}

	function add_entries( $wp_admin_bar ) {
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-content', 'title' => __('Content'), 'parent' => false ) );
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-posts', 'title' => __('Posts'), 'parent' => 'extended-toolbar-content', 'href' => admin_url("edit.php") ) );
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-media', 'title' => __('Media'), 'parent' => 'extended-toolbar-content', 'href' => admin_url("upload.php") ) );
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-links', 'title' => __('Links'), 'parent' => 'extended-toolbar-content', 'href' => admin_url("link-manager.php") ) );
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-pages', 'title' => __('Pages'), 'parent' => 'extended-toolbar-content', 'href' => admin_url("edit.php?post_type=pages") ) );
		$wp_admin_bar->add_node( array( 'id' => 'extended-toolbar-comments', 'title' => __('Comments'), 'parent' => 'extended-toolbar-content', 'href' => admin_url("edit-comments.php") ) );
	}
}

$obj = new ExtToolbar();
?>