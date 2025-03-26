<?php
	$j = 0;
?>
<?php if($query->have_posts()):?>
<div class="bwp-recent-post <?php echo esc_attr($layout); ?>">
	<div class="block">
		<?php if(isset($title1) && $title1) { ?>
		<div class="title-block">
			<h2><?php echo esc_html($title1); ?></h2>
			<?php if($description) { ?>
			<div class="page-description"><?php echo esc_html($description); ?></div>
			<?php } ?>
		</div>
		<?php } ?>
		<div class="block_content">
			<div id="<?php echo esc_attr($tag_id); ?>" class="slick-carousel" data-slidestoscroll="true" data-dots="<?php echo esc_attr($show_pag);?>" data-nav="<?php echo esc_attr($show_nav);?>" data-columns4="<?php echo $columns4; ?>" data-columns3="<?php echo $columns3; ?>" data-columns2="<?php echo $columns2; ?>" data-columns1="<?php echo $columns1; ?>" data-columns="<?php echo $columns; ?>">
				<?php while($query->have_posts()):$query->the_post(); ?>
				<!-- Wrapper for slides -->
				<?php	if( ( $j % $item_row ) == 0 && $item_row !=1) { ?>
					<div class="item">
					<?php } ?>
						<div  <?php post_class( 'post-grid' ); ?>>
							<div class="post-inner style">
								<div class="thumbnail">
									<a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true">
									<?php
										if( has_post_thumbnail() ) :
											the_post_thumbnail( 'broxi-blog-layout-1', array( 'alt' => get_the_title() ) );
										else :
											echo '<img src="' . esc_url( get_template_directory_uri() . '/images/placeholder.jpg' ) . '" alt="' . get_the_title() . '">';
										endif;
									?>
									</a>
									<div class="meta-date"><?php wpbingo_posted_on(); ?></div>
								</div>
								<div class="post-content">
									<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
									<div class="entry-meta-head">
										<?php if (broxi_get_config('archives-author')) { ?>
											<div class="entry-author">
												<span class="entry-meta-link"><?php echo esc_html__("By : ","wpbingo") ?><?php echo the_author_posts_link(); ?></span>
											</div>
										<?php } ?>
										<span class="comments-link">
											<?php 
											$comment_count =  wp_count_comments(get_the_ID())->total_comments;
											if($comment_count > 0) {
											?>
												<?php if($comment_count == 1){?>
													<?php echo esc_attr($comment_count) .'<span>'. esc_html__(' Comment', 'wpbingo').'</span>'; ?>
												<?php }else{ ?>
													<?php echo esc_attr($comment_count) .'<span>'. esc_html__(' Comments', 'wpbingo').'</span>'; ?>
												<?php } ?>
											<?php }else{ ?>
												<?php echo esc_attr($comment_count) .'<span>'. esc_html__(' Comments', 'wpbingo').'</span>'; ?>
											<?php } ?>
										</span>
									</div>
									<div class="btn-read-more"><a class="read-more" href="<?php the_permalink() ?>"><?php echo esc_html__("Read more","wpbingo") ?></a></div>
								</div>
							</div>
						</div><!-- #post-## -->
					<?php if( ($j % $item_row == 1 || $j == $post_count) && $item_row !=1  ){?>
					</div>
					<?php  } $j++;?>
				<?php endwhile; wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</div>
<?php endif;?>