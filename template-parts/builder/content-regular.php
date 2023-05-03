<?php
$customization = get_sub_field( 'customization' );
$background_color = $customization['background_color'];
$light_text = $customization['light_text'];
$padding = $customization['padding'];
?>
<div
	class="content-two-cols <?php if ( $padding ) : ?>with-padding <?php endif; ?><?php if ( $light_text ): ?>text-light<?php else : ?> text-dark<?php endif; ?>"
	style='<?php if ( $background_color ): echo "background-color: " . $background_color; endif; ?>'
>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php the_sub_field( 'content' ); ?>
			</div><!-- .col-12 .col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-two-cols -->
