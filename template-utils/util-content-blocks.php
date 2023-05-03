<div class="col-12 col-lg-9">
	<?php
	$content_blocks = get_field( 'content_block_with_files' );

	if ( $content_blocks ):

		foreach( $content_blocks as $content_key => $content_block ) {
			$block_title = $content_block['title'];
			$block_content = $content_block['content'];
			$block_files = $content_block['files'];
			?>

			<div class="mb-4">
				<h3><?php echo $block_title; ?></h3>

				<div>
					<?php echo $block_content; ?>
				</div>

				<?php
				if ( $block_files ) :
					foreach( $block_files as $key => $block_file ) {
						if ( $block_file ) :
							$title = $block_file['files']['title'];
							$files = $block_file['files']['files'];
							$is_accordion = $block_file['files']['accordion'];
							$block_key = $content_key . '-' . $key;
							$block_id = 'file-block-' . $key;
							?>

							<?php if ( $is_accordion ) : ?>
							<div class="accordion mb-2" id="<?php echo $block_id; ?>">
								<div class="d-block">
									<div class="file-block-header" id="file-block-header-<?php echo $block_key; ?>">
										<h4>
											<button
												class="btn btn-gray-light btn-block text-dark text-left"
												type="button"
												data-toggle="collapse"
												data-target="#file-block-content-<?php echo $block_key; ?>"
												aria-expanded="true"
												aria-controls="file-block-content-<?php echo $block_key; ?>"
											>
												<?php echo $title; ?>
											</button>
										</h4>
									</div><!-- .file-block-header -->
									<div
										class="file-block-content collapse"
										id="file-block-content-<?php echo $block_key; ?>"
										aria-labelledby="file-block-header-<?php echo $block_key; ?>"
										data-parent="#<?php echo $block_id; ?>"
									>
										<?php
										if ( $files ) :
											foreach( $files as $key => $file ) {
												$file_content = $file['file'];
												?>

														<a class="btn btn-outline-secondary btn-block text-left" href="<?php echo $file_content['url']; ?>" target="_blank">
															<i class="fas fa-file-pdf mr-1"></i>
															<?php echo $file_content['title']; ?>
														</a>

												<?php
											}
										endif;
										?>
									</div><!-- .file-block-content -->
								</div><!-- .d-block -->
							</div><!-- .accordion #file-content-accordion -->
						<?php else : ?>
							<h4><?php echo $title; ?></h4>

							<ul class="list-unstyled">
								<?php
								if ( $files ) :
									foreach( $files as $key => $file ) {
										$file_content = $file['file'];
										?>
										<li class="d-block mb-2">
											<a class="btn btn-outline-secondary btn-block text-left" href="<?php echo $file_content['url']; ?>" target="_blank">
												<i class="fas fa-file-pdf mr-1"></i>
												<?php echo $file_content['title']; ?>
											</a>
										</li>
										<?php
									}
								endif;
								?>
							</ul>
						<?php endif; ?>
						<?php
						endif;
					}
				endif;
				?>
			</div>
			<?php
		};
	endif;
	?>
</div><!-- .col-12 .col-lg-9 -->
