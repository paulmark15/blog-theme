<?php


function gif_load_widget() {
	register_widget( 'gif_widget' );
}
add_action( 'widgets_init', 'gif_load_widget' );


class gif_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
			'gif_widget',
			__('Random Gif Widget', 'gif_widget_domain'),
			array( 'description' => __( 'This widget fetches random coding love post', 'gif_widget_domain' ), )
		);
	}


	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		echo $args['before_widget'];
		if ( ! empty( $title ) )
			echo $args['before_title'] . $title . $args['after_title'];
		echo __( '<div id="gif-wrapper"></div>', 'gif_widget_domain' );
		echo $args['after_widget'];
	}

	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Random Gif', 'gif_widget_domain' );
		}

		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
}