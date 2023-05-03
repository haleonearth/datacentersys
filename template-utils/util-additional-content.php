<?php
$additional_content = get_field( 'additional_content' );
if ( $additional_content ) : ?>

	<div class="additional-content-container col-12">
		<div class="row">
			<div class="col-12 d-flex flex-column">
				<?php echo $additional_content; ?>
			</div>
		</div>
	</div><!-- .additional-content-container -->
<?php endif;
