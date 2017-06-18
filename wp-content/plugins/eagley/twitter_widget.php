<?php

function wpb_load_widget() {
	register_widget( 'twitter_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );

class twitter_widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'twitter_widget', 
            __('Twitter', 'twitter_widget_domain'), 
            array( 'description' => __( 'Widget to display embedded Twitter feed', 'twitter_widget_domain' ), ) 
        );
    }

    // Creating widget front-end

    public function widget( $args, $instance ) {
        $title = apply_filters( 'widget_title', $instance['title'] );
        $feed = apply_filters( 'widget_feed', $instance['feed'] );
        $height = apply_filters( 'widget_height', $instance['height'] );
        
        // before and after widget arguments are defined by themes
        echo $args['before_widget'];
        if ( ! empty( $title ) ) {
            echo $args['before_title'] . $title . $args['after_title'];
        }

        if ($feed) {
            if ($height) {
                $heightHtml = ' data-height="' . $height .'"';
            } else {
                $heightHtml = '';
            } ?>
            <a class="twitter-timeline"<?php echo $heightHtml;?> href="https://twitter.com/<?php echo $feed;?>">Tweets by <?php echo $feed;?></a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
        <?php
        }
        
        echo $args['after_widget'];
    }
		
    // Widget Backend 
    public function form( $instance ) {
        if ( isset( $instance[ 'title' ] ) ) {
            $title = $instance[ 'title' ];
        }
        else {
            $title = "";
        }
        
        if ( isset( $instance[ 'feed' ] ) ) {
            $feed = $instance[ 'feed' ];
        }
        else {
            $feed = "";
        }
        
        if ( isset( $instance[ 'height' ] ) ) {
            $height = $instance[ 'height' ];
        }
        else {
            $height = "500";
        }
        
        // Widget admin form
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'feed' ); ?>"><?php _e( 'Feed:' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'feed' ); ?>" name="<?php echo $this->get_field_name( 'feed' ); ?>" type="text" value="<?php echo esc_attr( $feed ); ?>" />
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'height' ); ?>"><?php _e( 'Height (in px):' ); ?></label> 
            <input class="widefat" id="<?php echo $this->get_field_id( 'height' ); ?>" name="<?php echo $this->get_field_name( 'height' ); ?>" type="text" value="<?php echo esc_attr( $height ); ?>" />
        </p>
        <?php 
    }
	
    // Updating widget replacing old instances with new
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['feed'] = ( ! empty( $new_instance['feed'] ) ) ? strip_tags( $new_instance['feed'] ) : '';
        $instance['height'] = ( ! empty( $new_instance['height'] ) ) ? strip_tags( $new_instance['height'] ) : '';
        return $instance;
    }
}

