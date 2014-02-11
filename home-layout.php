<?php
/*
Template Name: Home Layout
*/


get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<?php 
		
		
		// The Featured Posts query.
		$featured = new WP_Query( array('post_type' => 'post','tag'=>'featured', 'posts_per_page'=>2, 'page'=>'1') );
		if ( $featured->have_posts() ) : 
			while ( $featured->have_posts() ) : $featured->the_post(); 
				get_template_part( 'content', 'featured' ); 
			endwhile; 
			wp_reset_postdata();
		else : 
			echo '<p>There is no post found that is tagged as "featured".</p>'; 
		endif; 
		
		
		// The Latest Posts query.
		$featured_tag_id = get_term_by('slug', 'featured', 'post_tag')->term_id;
		$latest = new WP_Query( array('post_type' => 'post', 'tag__not_in'=>array($featured_tag_id), 'posts_per_page'=>6, 'page'=>'1') );
		
		if ( $latest->have_posts() ) : 
			while ( $latest->have_posts() ) : $latest->the_post(); 
				get_template_part( 'content', 'latest' ); 
			endwhile; 
			wp_reset_postdata();
		else : 
			echo '<p>There is no latest post.</p>'; 
		endif;
		
		
		?>
		
		
			
			
			

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>