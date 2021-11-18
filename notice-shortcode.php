<?php
/*
Plugin Name: AM Notice Shortcode
Description: Display diffrent notice boxes with using shortcode
Version:     1.0
Author:      Amin Pak
Author URI: mailto:amin.apk008@gmail.com
*/
defined('ABSPATH') or die();

define('AMNoticeShortcode_DIRECTORY', plugin_dir_path(__FILE__));

define('AMNoticeShortcode_URL', plugin_dir_url(__FILE__));

require 'includes/init.php';

//Shortcodes Define
function notice_msg_danger($atts)
{
    $Content = '<div class="alert alert-danger alert-dismissible " role="alert">
    <strong>Danger!</strong> Indicates a dangerous or potentialy negative action.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

    return $Content;
}
function notice_msg_success($atts)
{
    $Content = '<div class="alert alert-success alert-dismissible" role="alert">
    <strong>Success!</strong> Indicates a successful or positive action.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

    return $Content;
}
function notice_msg_info($atts)
{
    $Content = '<div class="alert alert alert-info alert-dismissible" role="alert">
    <strong>Info!</strong> Indicates a neutral informative change or action.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

    return $Content;
}
function notice_msg_warning($atts)
{
    $Content = '<div class="alert alert alert-warning alert-dismissible" role="alert">
    <strong>Warning!</strong> Indicates a warning that might need attention.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

    return $Content;
}
//Add Shortcodes
add_shortcode('nt-msg-dng', 'notice_msg_danger');
add_shortcode('nt-msg-scs', 'notice_msg_success');
add_shortcode('nt-msg-inf', 'notice_msg_info');
add_shortcode('nt-msg-war', 'notice_msg_warning');

