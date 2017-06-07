<?php

class Contact_Widget extends WP_Widget{

    /*
    *   Plugin Constructor
    */

    public function __construct(){
        parent::__construct(
            'contact_widget', //Base ID
            __('Ajax Contact Widget','text_domain');//Name
            array('description'=>__('Ajax powered contact widget','text_domain'));
        );
    }

    /*
    *   Frontend Display
    */
    public function widget($args,$instance){
        $title = apply_filters('widget_title', $instance['title']);
        $recipient = $instance['recipient'];
        $subject = $instance['subject'];

        echo $args['before_widget'];

        if(!empty($title))
        {
            echo $args['before_title'].$title.$args['after_title'];
        }

        //Display Form
        echo $this->getForm($recipient,$subject);

        echo $args['after_widget'];
    }

    /*
    *   Backend Form
    */

}