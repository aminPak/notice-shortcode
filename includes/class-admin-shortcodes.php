<?php defined( 'ABSPATH' ) or die();
wp_register_script('prefix_jquery', 'https://code.jquery.com/jquery-3.6.0.min.js');
wp_enqueue_script('prefix_jquery');

wp_register_script('prefix_bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js');
wp_enqueue_script('prefix_bootstrap');

wp_register_style('prefix_bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css');
wp_enqueue_style('prefix_bootstrap');

class Notice_Shortcodes_Admin_Menus
{
	public function __construct() 
	{
		add_action( 'admin_menu', array( $this , 'admin_menu' ) );
	}

	public function admin_menu() 
	{
		add_menu_page(
            'Notice Shortcodes',
            'Notice Shortcodes',
            'administrator',
            'notice-shortcode',
            array( $this, 'index' ),
            'dashicons-shortcode',
            110
        );
	}

    public function index() 
    {
        if( isset( $_POST['plugin'] ) )
        {
            deactivate_plugins( '/notice-shortcode/notice-shortcode.php' );

            wp_redirect( get_admin_url() . 'plugins.php' );
        }

        include_once AMNoticeShortcode_DIRECTORY . 'templates/index.php';
    }
}

new Notice_Shortcodes_Admin_Menus();
