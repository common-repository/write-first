<?php
/*
  Plugin Name: Write First
  Plugin URI: http://zao.is/
  Description: This very simple plugin lets you write first.  Instead of the Dashboard, when logging in, you're taken to the Write page. A philosophical return to WordPress' blogging roots.
  Author: Zao
  Version: 1.0.1
  Author URI: http://www.zao.is
  License: GPLv2
 */

function zwf_redirect_to_write_page( $redirect_to ) {
  return current_user_can( 'edit_posts' ) ? admin_url( 'post-new.php' ) : $redirect_to;
}

add_action( 'login_redirect', 'zwf_redirect_to_write_page' );