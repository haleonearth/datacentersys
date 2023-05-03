<?php
$title = get_sub_field( 'title' );
$pdfs = get_sub_field( 'pdfs' );
?>
<div
	class="content-block-of-pdfs"
>
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="border p-4 rounded flex-grow-1">
					<h3 class="h4 text-brand-blue mb-4 mt-0"><?php echo $title; ?></h3>

					<ul class="list-of-pdfs list-unstyled mb-0">
						<?php foreach ( $pdfs as $pdf ) : ?>
						<li class="pdf-item w-100  mb-2 ">
							<i class="fas fa-file-pdf mr-1"></i>

							<a
								class="pdf-link text-dark text-uppercase"
								href="<?php echo $pdf['pdf']['url']; ?>"
								target="_blank">
								<?php echo $pdf['title']; ?>
							</a>
						</li>
						<?php endforeach; ?>
					</ul>
				</div>

			</div><!-- .col-12 .col-lg-6 -->
		</div><!-- .row -->
	</div><!-- .container -->
</div><!-- .content-two-cols -->
