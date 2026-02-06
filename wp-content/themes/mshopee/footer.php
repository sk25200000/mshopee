<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="ftr-top">
			<div class="fix-wrap">
				<div class="ftr-top-inr">
					<div class="ftr-top-lt wow fadeInLeft">
						<?php if( get_field('lets_create_title', 'options') ): ?>
							<h3><?php the_field('lets_create_title', 'options'); ?></h3>
						<?php endif; ?>
						<?php if( get_field('lets_create_content', 'options') ): ?>
							<p><?php the_field('lets_create_content', 'options'); ?></p>
						<?php endif; ?>
					</div>
					<?php if( get_field('lets_connect_btn_text', 'options') and get_field('lets_connect_btn_link', 'options') ): ?>
						<a href="<?php the_field('lets_connect_btn_link', 'options'); ?>" class="lets-connect-btn wow fadeInRight">
							<?php the_field('lets_connect_btn_text', 'options'); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</div>
		<div class="ftr-middle">
			<div class="fix-wrap">
				<div class="ftr-middle-inr">
					<?php if( get_field('footer_logo', 'options') ): ?>
						<div class="ftr-logo ftr-mid-col wow fadeInUp">
							<img src="<?php the_field('footer_logo', 'options'); ?>" alt="Mshopee"/>
						</div>
					<?php endif; ?>
					<div class="ftr-product ftr-mid-col">
						<ul class="ftr-menu wow fadeInUp">
						<?php
							if(is_active_sidebar('footer-sidebar-1')){
								dynamic_sidebar('footer-sidebar-1');
							}
						?>
						</ul>
					</div>
					<div class="ftr-company ftr-mid-col">
						<ul class="ftr-menu wow fadeInUp">
						<?php
							if(is_active_sidebar('footer-sidebar-2')){
								dynamic_sidebar('footer-sidebar-2');
							}
						?>
						</ul>
					</div>
					<div class="ftr-legal ftr-mid-col">
						<ul class="ftr-menu wow fadeInUp">
						<?php
							if(is_active_sidebar('footer-sidebar-3')){
								dynamic_sidebar('footer-sidebar-3');
							}
						?>
						</ul>
					</div>
					<div class="ftr-get-app ftr-mid-col">
						<?php if( get_field('ftr_get_app_btn_link', 'options') and get_field('ftr_get_app_btn_text', 'options') ): ?>
							<a href="<?php the_field('ftr_get_app_btn_link', 'options'); ?>" class="ftr-get-app-btn wow fadeInUp">
								<?php the_field('ftr_get_app_btn_text', 'options'); ?>
							</a>
						<?php endif; ?>
						<div class="ftr-social-media">
						<?php if( have_rows('social_media', 'options') ): ?>
							<?php while( have_rows('social_media', 'options') ): the_row(); ?>
								<?php if( get_sub_field('social_link', 'options') and get_sub_field('social_icon', 'options') ): ?>
								<a href="<?php the_sub_field('social_link', 'options'); ?>" class="wow fadeInUp">
									<?php the_sub_field('social_icon', 'options'); ?>
								</a>
								<?php endif; ?>	
							<?php endwhile; ?>
						<?php endif; ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="ftr-bottom">
			<div class="fix-wrap">
				<?php if( get_field('copyright', 'options') ): ?>
					<p class="wow fadeInUp"><?php the_field('copyright', 'options'); ?></p>
				<?php endif; ?>
			</div>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/custom.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/wow.min.js"></script>
<script type="text/javascript">
    wow = new WOW (
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0,          // default
          mobile:       true,       // default
          live:         true        // default
        }
    )
    wow.init();
</script>
</body>
</html>
