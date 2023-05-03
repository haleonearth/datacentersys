<?php

$spec_sheets = get_field( 'spec_sheets' );
$diagrams = get_field( 'diagrams' );

if ( $spec_sheets || $diagrams ) :
	?>

<div class="additional-resources w-100">
	<h2 class="h4 mb-4 text-uppercase text-brand-red">Additional Resources</h2>

	<div class="row d-flex">
		<?php if ( $spec_sheets ) : ?>
		<div class="col-12 col-lg-6 flex-grow-1 d-flex">
			<div class="border p-4 rounded flex-grow-1">
				<h3 class="h4 text-brand-blue mb-4 mt-0">Spec Sheet</h3>

				<ul class="list-of-pdfs list-unstyled mb-0">

				<?php
				foreach( $spec_sheets as $key => $sheet ) {
					$pdf = $sheet['pdf'];
				?>

					<li class="pdf-item w-100 <?php if ( $key + 1 == count( $spec_sheets ) ) : ?> mb-0 <?php else: ?> mb-2 <?php endif; ?>">
						<i class="fas fa-file-pdf mr-1"></i>

						<a class="pdf-link text-dark text-uppercase" href="<?php echo esc_attr( $pdf['pdf']['url'] ); ?>" target="_blank">
							<?php echo esc_html( $pdf['title'] ); ?>
						</a>

					</li>

				<?php
				}
				?>
				</ul>
			</div><!-- .border .p-4 .rounder -->
		</div><!-- .col-lg-6 -->
		<?php endif; ?>

		<?php if ( $diagrams ) : ?>
			<div class="col-12 col-lg-6 flex-grow-1 d-flex">
				<div class="border p-4 rounded flex-grow-1">
					<h3 class="h4 text-brand-blue mb-4 mt-0">Diagrams</h3>

					<ul class="list-of-pdfs list-unstyled mb-0">

						<?php
						foreach( $diagrams as $key => $sheet ) {
							$pdf = $sheet['pdf'];
							?>

							<li class="pdf-item w-100 <?php if ( $key + 1 == count( $diagrams ) ) : ?> mb-0 <?php else: ?> mb-2 <?php endif; ?>">
								<i class="fas fa-file-pdf mr-1"></i>

								<a class="pdf-link text-dark text-uppercase" href="<?php echo esc_attr( $pdf['pdf']['url'] ); ?>" target="_blank">
									<?php echo esc_html( $pdf['title'] ); ?>
								</a>

							</li>

							<?php
						}
						?>
					</ul>
				</div><!-- .border .p-4 .rounder -->
			</div><!-- .col-lg-6 -->
		<?php endif; ?>
	</div><!-- .row -->
</div><!-- .additional-resources -->
<?php
endif;
