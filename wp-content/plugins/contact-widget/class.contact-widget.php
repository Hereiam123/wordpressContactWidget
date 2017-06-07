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
    public function form($instance){

        if(isset($instance['title'])){
            $title = $instance['title'];
        }else{
            $title = __('Ajax Contact Widget','text_domain');
        }

        $recipient = $instance['recipient'];
        $subject = $instance['subject'];

        ?>

        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>"><?php esc_attr_e( 'Title:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'title' ) ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'recipient' ) ); ?>"><?php esc_attr_e( 'Recipient:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'recipient' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'recipient' ) ); ?>" type="text" value="<?php echo esc_attr( $recipient ); ?>">
        </p>
        <p>
            <label for="<?php echo esc_attr( $this->get_field_id( 'subject' ) ); ?>"><?php esc_attr_e( 'Subject:', 'text_domain' ); ?></label>
            <input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'subject' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'subject' ) ); ?>" type="text" value="<?php echo esc_attr( $subject ); ?>">
        </p>

        <?php
    }

    /*
    *   Update Method
    */
    public function update($new_instance,$old_instance){
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['recipient'] = ( ! empty( $new_instance['recipient'] ) ) ? strip_tags( $new_instance['recipient'] ) : '';
        $instance['subject'] = ( ! empty( $new_instance['subject'] ) ) ? strip_tags( $new_instance['subject'] ) : '';

        return $instance;
    }
}