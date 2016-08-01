<?php get_header(); ?>
	

							<?php $loop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => -1 ) ); ?>
							<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

								<h2><a href = "<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<p = "tesxt-muted"><?php the_author(); ?> il <?php the_time('jS F, Y'); ?></p> 							
								<p><?php the_excerpt(''); ?></p> 	

							<?php endwhile; wp_reset_query(); ?>


<?php get_footer(); ?>