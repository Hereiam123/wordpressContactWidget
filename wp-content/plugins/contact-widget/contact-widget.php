<?php
    /*
    Plugin Name: Ajax contact widget
    Description: Simple ajax contact widget
    Version:     1.0
    Author:      Brian De Maio
    Author URI:  bdemaio.com
    License:     GPL2
    License URI: https://www.gnu.org/licenses/gpl-2.0.html
    */

    /*
    *   Include jquery file
    */
    function add_scripts(){
        wp_enqueue_script('contact-scripts',plugins_url().'/contact-widget/js/scripts.js',array('jquery'),'1.0.0',false);
    }
    add_action('wp_enqueue_scripts','add_scripts');

    /*
    *   Add widget class
    */
    include('class.contact-widget.php');

    /*
    *   Register the contact widget
    */

    function register_contact_widget(){
        register_widget('Contact_Widget');
    }

    add_action('widgets_init','register_contact_widget');