<?php
/* Template Name: Home Page */
get_header();
?>
<!-- Topbar Banner Section Start  -->
<div class="topbar-banner">
	<div class="fix-wrap">
		<div class="banner-caption-lt wow fadeInLeft">
			<?php if( get_field('banner_title') ): ?>
				<h1><?php the_field('banner_title'); ?></h1>
			<?php endif; ?>
			<?php if( get_field('banner_content') ): ?>
				<p><?php the_field('banner_content'); ?></p>
			<?php endif; ?>
			<?php if( get_field('banner_content') ): ?>
				<p><?php the_field('banner_content'); ?></p>
			<?php endif; ?>
			<?php if( get_field('button_text') and get_field('button_link') ): ?>
				<a href="<?php the_field('button_link'); ?>" class="get-app-btn"><?php the_field('button_text'); ?></a>
			<?php endif; ?>
		</div>
		<?php if( get_field('right_image') ): ?>
			<div class="banner-caption-rt wow fadeInRight">
				<img src="<?php the_field('right_image'); ?>" alt="<?php the_field('image_alt'); ?>"/>
			</div>
		<?php endif; ?>
	</div>
</div>
<!-- Topbar Banner Section End -->

<!-- How Work Section Start -->
<div class="how-work">
	<div class="fix-wrap">
		<div class="section-header">
			<?php if( get_field('how_work_title') ): ?>
				<h2 class="wow fadeInUp"><?php the_field('how_work_title'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('how_work_content') ): ?>
				<p class="wow fadeInUp"><?php the_field('how_work_content'); ?></p>
			<?php endif; ?>
		</div>
		<div class="how-work-items">
		<?php if( have_rows('how_work_item') ): ?>
			<?php while( have_rows('how_work_item') ): the_row(); ?>
			<div class="how-work-item wow fadeInUp">
				<?php if( get_sub_field('item_icon') ): ?>
					<i class="how-work-icon">
						<img src="<?php the_sub_field('item_icon'); ?>" alt="<?php the_sub_field('item_title'); ?>">
					</i>
				<?php endif; ?>
				<?php if( get_sub_field('item_title') ): ?>
					<h3><?php the_sub_field('item_title'); ?></h3>
				<?php endif; ?>
				<?php if( get_sub_field('item_content') ): ?>
					<p><?php the_sub_field('item_content'); ?></p>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
		<div class="how-work-btn-group">
			<?php if( get_field('how_work_btn_text') and get_field('how_work_btn_link') ): ?>
				<a href="<?php the_field('how_work_btn_link'); ?>" class="how-work-btn wow fadeInUp"><?php the_field('how_work_btn_text'); ?></a>
			<?php endif; ?>
			<?php if( get_field('get_started_btn_text') and get_field('get_started_btn_link') ): ?>
				<a href="<?php the_field('get_started_btn_link'); ?>" class="get-started-btn wow fadeInUp"><?php the_field('get_started_btn_text'); ?></a>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- How Work Section End -->

<!-- Take Business Start -->
<div class="take-business">
	<div class="fix-wrap">
		<div class="take-business-inr">
			<div class="take-business-lt">
				<?php if( get_field('take_business_title') ): ?>
					<h2 class="wow fadeInUp"><?php the_field('take_business_title'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('take_business_content') ): ?>
					<p class="wow fadeInUp"><?php the_field('take_business_content'); ?></p>
				<?php endif; ?>
				<div class="get-what-need">
				<?php if( get_field('get_what_title') ): ?>
					<h3 class="wow fadeInUp"><?php the_field('get_what_title'); ?></h3>
				<?php endif; ?>
				<div class="app-boxes">
					<?php if( have_rows('get_what_apps') ): ?>
						<?php while( have_rows('get_what_apps') ): the_row(); ?>
						<a href="<?php the_sub_field('app_link'); ?>" class="app-box wow fadeInUp">
							<?php if( get_sub_field('app_icon') ): ?>
								<i><img src="<?php the_sub_field('app_icon'); ?>" alt="<?php the_sub_field('app_name'); ?>"/></i>
							<?php endif; ?>
							<?php if( get_sub_field('app_name') ): ?>
								<span class="app-nm"><?php the_sub_field('app_name'); ?></span>
							<?php endif; ?>
						</a>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
			<?php if( get_field('take_business_image') ): ?>
				<div class="take-business-rt wow fadeInRight">
					<img src="<?php the_field('take_business_image'); ?>" alt="<?php the_field('take_business_title'); ?>"/>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Take Business End -->

<!-- Grab Style Start -->
<div class="grab-style">
	<?php if( get_field('line_shape') ): ?>
	<div class="grab-style-ln-shape wow fadeIn">
		<img src="<?php the_field('line_shape'); ?>" alt="<?php the_field('grab_style_title'); ?>"/>
	</div>
	<?php endif; ?>
	<div class="fix-wrap">
		<div class="section-header">
			<?php if( get_field('grab_style_title') ): ?>
				<h2 class="wow fadeInUp"><?php the_field('grab_style_title'); ?></h2>
			<?php endif; ?>
			<?php if( get_field('grab_style_content') ): ?>
				<p class="wow fadeInUp"><?php the_field('grab_style_content'); ?></p>
			<?php endif; ?>
		</div>
		<div class="grab-style-inr wow fadeIn">
		<?php if( have_rows('app_ui_images') ): ?>
			<?php while( have_rows('app_ui_images') ): the_row(); ?>
				<?php if( get_sub_field('ui_image') ): ?>
				<div class="grab-style-ui">
					<div class="gsu-inner"><img src="<?php the_sub_field('ui_image'); ?>" alt="<?php the_sub_field('image_alt'); ?>"/></div>
				</div>
				<?php endif; ?>		
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- Grab Style End -->

<!-- Shopify Website Start -->
<div class="shopify-website">
	<?php if( get_field('shopify_website_line_shape') ): ?>
		<div class="shopify-web-line-shape wow fadeIn">
			<img src="<?php the_field('shopify_website_line_shape'); ?>" alt="<?php the_field('grab_style_title'); ?>"/>
		</div>
	<?php endif; ?>
	<div class="fix-wrap">
		<div class="shopify-web-inr">
			<div class="shopify-web-lt">
				<div class="shopify-web-view wow fadeIn">
					<?php if( have_rows('web_view_image') ): ?>
						<?php while( have_rows('web_view_image') ): the_row(); ?>
						<img src="<?php the_sub_field('web_view'); ?>" alt="<?php the_sub_field('grab_style_title'); ?>"/>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="shopify-web-rt wow fadeInRight">
					<?php if( get_field('shopify_web_title') ): ?>
						<h2><?php the_field('shopify_web_title'); ?></h2>
					<?php endif; ?>
					<?php if( get_field('shopify_web_content') ): ?>
						<p><?php the_field('shopify_web_content'); ?></p>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Shopify Website End -->

<!-- Hasslefree Experience Start -->
<div class="hasslefree-experience">
	<div class="fix-wrap">
		<div class="section-header">
			<?php if( get_field('take_business_title') and  get_field('hasslefree_experience_title') ): ?>
				<h2 class="wow fadeInUp"><?php the_field('hasslefree_experience_sub_title'); ?> <span><?php the_field('hasslefree_experience_title'); ?></span></h2>
			<?php endif; ?>
		</div>
		<div class="hasslefree-features">
		<?php if( have_rows('hasslefree_features') ): ?>
			<?php while( have_rows('hasslefree_features') ): the_row(); ?>
			<div class="features-item">
				<?php if( get_sub_field('hasslefree_features_title') ): ?>
					<h3 class="wow fadeInUp"><?php the_sub_field('hasslefree_features_title'); ?></h3>
				<?php endif; ?>
				<?php if( get_sub_field('hasslefree_icons') ): ?>
					<i class="features-icons wow fadeInUp"><img src="<?php the_sub_field('hasslefree_icons'); ?>" alt="<?php the_sub_field('hasslefree_features_title'); ?>"/></i>
				<?php endif; ?>
				<ul class="features-list">
				<?php if( have_rows('hasslefree_list') ): ?>
					<?php while( have_rows('hasslefree_list') ): the_row(); ?>
						<?php if( get_sub_field('list_item') ): ?>
							<li class="wow fadeInUp"><?php the_sub_field('list_item'); ?></li>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				</ul>
			</div>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- Hasslefree Experience End -->

<!-- Payment Gateway Start -->
<div class="payment-gateway">
	<div class="fix-wrap">
		<div class="payment-gateway-inr">
			<div class="payment-gateway-lt">
				<?php if( get_field('payment_gateway_title') ): ?>
					<h2 class="wow fadeInUp"><?php the_field('payment_gateway_title'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('payment_gateway_content') ): ?>
					<p class="wow fadeInUp"><?php the_field('payment_gateway_content'); ?></p>
				<?php endif; ?>
				<div class="payment-methods">
				<?php if( have_rows('payment_gateway_types') ): ?>
					<?php while( have_rows('payment_gateway_types') ): the_row(); ?>
						<?php if( get_sub_field('payment_icon') ): ?>
						<i class="payment-view wow fadeInUp">
							<img src="<?php the_sub_field('payment_icon'); ?>" alt="<?php the_sub_field('payment_icon_alt'); ?>"/>
						</i>
						<?php endif; ?>
					<?php endwhile; ?>
				<?php endif; ?>
				</div>
			</div>
			<?php if( get_field('payment_gateway_image') ): ?>
			<div class="payment-gateway-rt wow fadeInRight">
				<img src="<?php the_field('payment_gateway_image'); ?>" alt="<?php the_field('payment_gateway_title'); ?>"/>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Payment Gateway End -->

<!-- Brind Brand Start -->
<div class="bring-brand">
	<div class="fix-wrap">
		<div class="section-header">
			<?php if( get_field('bring_brand_title') ): ?>
				<h2 class="wow fadeInUp"><?php the_field('bring_brand_title'); ?></h2>
			<?php endif; ?>
		</div>
	</div>
	<div class="bring-column-view">
		<?php if( get_field('bring_brand_left_image') ): ?>
		<div class="brind-brand-lt wow fadeInLeft">
			<img src="<?php the_field('bring_brand_left_image'); ?>" alt="<?php the_field('bring_brand_center_title'); ?>"/>
		</div>
		<?php endif; ?>
		<div class="brind-brand-ct wow fadeIn">
			<?php if( get_field('bring_brand_center_title') ): ?>
				<strong><?php the_field('bring_brand_center_title'); ?></strong>
			<?php endif; ?>
			<?php if( get_field('bring_brand_center_cnt') ): ?>
				<p><?php the_field('bring_brand_center_cnt'); ?></p>
			<?php endif; ?>
		</div>
		<div class="brind-brand-rt wow fadeInRight">
			<?php if( get_field('bring_brand_right_image') ): ?>
				<img src="<?php the_field('bring_brand_right_image'); ?>" alt="<?php the_field('bring_brand_center_title'); ?>"/>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Brind Brand End -->

<!-- Get App Start -->
<div class="get-app" style="background-image: url('<?php the_field('get_app_banner'); ?>');">
	<div class="fix-wrap">
		<div class="get-app-inr">
			<div class="get-app-lt wow fadeInLeft">
				<?php if( get_field('get_app_title') ): ?>
					<h2><?php the_field('get_app_title'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('get_app_content') ): ?>
					<p><?php the_field('get_app_content'); ?></p>
				<?php endif; ?>
				<div class="get-app-btn-grp">
					<?php if( get_field('mshopee_button_link') and get_field('mshopee_button_icon') ): ?>
						<a href="<?php the_field('mshopee_button_link'); ?>" class="mshopee-btn">
							<img src="<?php the_field('mshopee_button_icon'); ?>" alt="<?php the_field('get_app_title'); ?>"/>
						</a>
					<?php endif; ?>
					<?php if( get_field('get_app_started_btn_link') and get_field('get_app_started_btn_text') ): ?>
						<a href="<?php the_field('get_app_started_btn_link'); ?>" class="get-app-st-btn">
							<?php the_field('get_app_started_btn_text'); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
			<?php if( get_field('get_app_right_image') ): ?>
				<div class="get-app-rt wow fadeInRight">
					<img src="<?php the_field('get_app_right_image'); ?>" alt="<?php the_field('get_app_title'); ?>"/>
				</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Get App End -->

<!-- Join Millions Start -->
<div class="join-millions">
	<div class="fix-wrap">
		<div class="section-header">
			<?php if( get_field('join_millions_title') ): ?>
				<h2 class="wow fadeInUp"><?php the_field('join_millions_title'); ?></h2>
			<?php endif; ?>
		</div>
		<div class="million-brands">
		<?php if( have_rows('million_brands') ): ?>
			<?php while( have_rows('million_brands') ): the_row(); ?>
				<?php if( get_sub_field('brand') ): ?>
				<div class="brand wow fadeIn">
					<img src="<?php the_sub_field('brand'); ?>" alt="<?php the_sub_field('brand_alt'); ?>"/>
				</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
		</div>
	</div>
</div>
<!-- Join Millions End -->

<!-- Client Testimonial Start -->
<div class="client-testimonials">
	<div class="fix-wrap">
		<div class="testimonials-inr">
			<div class="testimonials-lt wow fadeInLeft">
			<?php if( have_rows('client_testimonials_repeater') ): ?>
				<?php while( have_rows('client_testimonials_repeater') ): the_row(); ?>
					<div class="testimonials-slide">
						<?php if( get_sub_field('client_say') ): ?>
							<p><?php the_sub_field('client_say'); ?></p>
						<?php endif; ?>
						<?php if( get_sub_field('client_name') ): ?>
							<span class="client-nm"><?php the_sub_field('client_name'); ?></span>
						<?php endif; ?>
						<?php if( get_sub_field('client_role') ): ?>
							<span class="client-role"><?php the_sub_field('client_role'); ?></span>
						<?php endif; ?>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
			</div>
			<?php if( get_field('client_testimonials_right') ): ?>
			<div class="testimonials-rt wow fadeInRight">
				<img src="<?php the_field('client_testimonials_right'); ?>" alt="<?php the_field('image_alt'); ?>"/>
			</div>
			<?php endif; ?>
		</div>
	</div>
</div>
<!-- Client Testimonial End -->
<?php get_footer(); ?>
