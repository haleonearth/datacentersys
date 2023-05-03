<?php
//$fields = get_field_object( 'field_605cb7092457a' );
//echo var_dump( $fields );

$blocks = get_sub_field( 'blocks' );
?>
<div class="red-blocks bg-brand-red text-light">
	<div class="container">
		<div class="row">
			<?php
			foreach( $blocks as $key => $block ) :
			?>
				<div class="col-12 col-lg-4 red-block-item d-flex mb-4 mb-lg-0">
					<div class="p-4 border border-light d-flex flex-column flex-grow-1">
						<p class="h5 mt-0 text-light font-weight-bold mb-4">
							<?php echo $block['title']; ?>
						</p>

						<div>
							<?php echo $block['content']; ?>
						</div>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
