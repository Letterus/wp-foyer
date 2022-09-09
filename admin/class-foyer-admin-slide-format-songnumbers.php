<?php

/**
 * Adds admin functionality for the Song Numbers slide format.
 *
 * @since		1.7.5.1-kkdi
 *
 * @package		Foyer
 * @subpackage	Foyer/admin
 * @author		Menno Luitjes <menno@mennoluitjes.nl>, Johannes Brakensiek <letterus@codingpastor.de>
 */
class Foyer_Admin_Slide_Format_Songnumbers {

	/**
	 * Saves additional data for the Songnumbers slide format.
	 *
	 * @since	1.7.5.1-kkdi
	 *
	 * @param	int		$post_id	The ID of the post being saved.
	 * @return	void
	 */
	static function save_slide( $post_id ) {
		$slide_songnumbers = wp_kses_post( $_POST['slide_songnumbers'] );

		update_post_meta( $post_id, 'slide_songnumbers', $slide_songnumbers );
	}

	/**
	 * Outputs the meta box for the Text slide format.
	 *
	 * @since	1.7.5.1-kkdi
	 *
	 * @param	WP_Post	$post	The post of the current slide.
	 * @return	void
	 */
	static function slide_meta_box( $post ) {
		$slide_songnumbers = get_post_meta( $post->ID, 'slide_songnumbers', true );

		?><table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="slide_songnumbers"><?php _e( 'Songnumbers', 'foyer' ); ?></label>
					</th>
					<td>
						<textarea name="slide_songnumbers" id="slide_songnumers" class="large-text" rows="12"><?php echo esc_html( $slide_songnumbers ); ?></textarea>
					</td>
				</tr>
			</tbody>
		</table><?php
	}
}
