<?php
/**
 * Plugin Name:
 * Description:
 * Author:
 * Version: 1.0.0
 * Text Domain: simple-contact-form
 * 
 */

 if (!defined('ABSPATH')) {
    echo 'What are you trying to do?';
    exit;
 }

 class SimpleContactForm {

    public function __construct() {
        add_action('init', array($this, 'create_custom_post_type'));
    }

    public function create_custom_post_type() {
      $args = array(
          'public' => true,
          'has_archive' => true,
          'supports' => array('title'),
          'exclude_from_search'=> true,
          'publicly_queryable' => false,
          'capability '=> 'manage_options',
          'labels' => array(
              'name' ⇒ 'Contact Form',
              'singular_name' ⇒ 'Contact Form Entry'
            ),
            'menu_icon' ⇒ 'dashicons-media-text',
        );

        register_post_type('simple_contact_form', $args);
    }
}

 new SimpleContactForm;

