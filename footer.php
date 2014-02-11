


				
				<?php if ( is_active_sidebar( 'main-bottom' ) ) : ?>
					<div id="main-bottom" class="row pull-left offsetBottom" role="complementary">
						<div class="widget-area">
							<?php dynamic_sidebar( 'main-bottom' ); ?>
						</div><!-- .widget-area -->
					</div>	
				<?php endif; ?>
				
            </div><!-- #main-inner -->
		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
            <div id="footer-inner">
    			<?php get_sidebar( 'main' ); ?>
            </div><!-- #footer-inner -->
			<div class="site-info">
				<div id="site-info-inner">
					<div class="spanHalf pull-left">
						<?php echo of_get_option('footer-html');?>
					</div>
					
					<nav id="site-navigation" class="navigation row spanHalf pull-right" role="navigation">
						<?php if(has_nav_menu('footer-menu')) wp_nav_menu( array( 'theme_location'  => 'footer-menu', 'depth' => 1 ) ); ?>
					</nav>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>