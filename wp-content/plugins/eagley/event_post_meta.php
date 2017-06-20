<?php

function load_widget_event_post_meta() {
	register_widget( 'event_post_meta' );
}
add_action( 'widgets_init', 'load_widget_event_post_meta' );

class event_post_meta extends WP_Widget
{
    function __construct()
    {
        parent::__construct( 'event_post_meta', 'Event Post Meta', array( 
            'classname'     => 'event_post_meta', 
            'description'   => 'Event information ("date", "location" or "time" custom fields must be set on post)'
        ));
    }

    function widget( $args, $instance )
    {    
        global $post;
        
        /* PRINT THE WIDGET */
        extract( $args , EXTR_SKIP );
        $instance = wp_parse_args( (array) $instance, array( 
            'title' => ''
        ));

        $title = $instance[ 'title' ];

        if($post == null || (!is_page() && !is_single())) {
            return; 
        }
        $location = get_post_meta($post->ID, 'location', true);
        $date = get_post_meta($post->ID, 'date', true);
        $time = get_post_meta($post->ID, 'time', true);
        if (!$location && !$date && !$time) {
            return;
        }
        
        echo $before_widget;
        
        if( !empty( $title ) ) {
            echo $before_title;
            echo apply_filters( 'widget_title', esc_attr( $title ), $instance, $this -> id_base );
            echo $after_title;
        }
        
        
        echo '<div class="large-icons">';
        echo '<ul>';
        if ($location) {
            echo '<li><i class="mythemes-icon-location"></i>' . esc_html( $location ) . '</li>';
        }
        if ($date) {
            echo '<li><i class="mythemes-icon-calendar"></i>' . esc_html( $date ) . '</li>';     
        }
        if ($time) {
            echo '<li><i class="mythemes-icon-clock"></i>' . esc_html( $time ) . '</li>';     
        }
        echo '</ul>';
        echo '</div>';
        
        echo $after_widget;
    }

    function update( $new_instance, $old_instance )
    {
        /* UPATE THE WIDGET OPTIONS */
        $instance               = $old_instance;
        $instance[ 'title' ]    = esc_attr( strip_tags( $new_instance[ 'title' ] ) );
        return $instance;
    }

    function form( $instance )
    {
        /* PRINT WIDGET FORM */
        $instance = wp_parse_args( (array) $instance, array( 
            'title' => ''
        ));
        
        $title = $instance[ 'title' ];
        
        echo '<p>';
        echo '<label for="' . $this -> get_field_id( 'title' ) . '">' . 'Title';
        echo '<input type="text" class="widefat" id="' . $this -> get_field_id( 'title' ) . '" name="' . $this -> get_field_name( 'title' ) . '" value="' . esc_attr( $title ) . '" />';
        echo '</label>';
        echo '</p>';
    }
}
?>