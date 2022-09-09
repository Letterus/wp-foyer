<?php
/**
 * Song number format template.
 *
 * @since	1.7.5.1-kkdi
 */

$slide = new Foyer_Slide( get_the_id() );

$slide_songnumbers = get_post_meta( $slide->ID, 'slide_songnumbers', true );

?><div<?php $slide->classes(); ?><?php $slide->data_attr(); ?>>
	<div class="inner">
		<div class="foyer-slide-fields">
			<?php if ( ! empty( $slide_songnumbers ) ) { ?>
				<div class="foyer-slide-field foyer-slide-field-content"><?php echo wpautop( $slide_songnumbers ); ?></div>
			<?php } ?>
		</div>
	</div>
	<?php $slide->background(); ?>
</div>