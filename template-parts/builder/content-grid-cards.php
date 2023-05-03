<?php
$content = get_sub_field( 'content' );
$customization = get_sub_field( 'customization' );
$background_color = $customization['background_color'];
$light_text = $customization['light_text'];
$padding = $customization['padding'];
?>

<div
	class="content-grid-cards <?php if ( $padding ) : ?>with-padding <?php endif; ?><?php if ( $light_text ): ?>text-light<?php else : ?> text-dark<?php endif; ?>"
	style='<?php if ( $background_color ): echo "background-color: #" . $background_color; endif; ?>'
>
	<div class="container">
		<div class="row">
			<div class="grid-cards py-4">
				<?php foreach( $content as $key => $content_item ) :
					$card_title = $content_item['card_title'];
				?>
					<div class="card">
						<img class="card-img-top p-4" src="<?php echo $content_item['card_image']['url']; ?>" alt="<?php echo $card_title; ?>">
						<div class="card-body d-flex flex-column">
							<h3 class="card-title"><?php echo $card_title; ?></h3>
							<div class="card-text"><?php echo $content_item['card_content']; ?></div>
							<div class="d-flex mt-auto">
								<?php echo $content_item['card_hubspot_cta']; ?>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			</div><!-- .grid-cards -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-two-cols -->
