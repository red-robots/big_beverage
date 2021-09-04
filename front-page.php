<?php
/**
 * The template for Home Page
 */
get_header(); ?>
<div id="primary" class="content-area home-content">
	<img src="<?php echo get_images_dir('home-overlay-1.png') ?>" alt="" aria-hidden="true" class="home-overlay" />
	<?php while ( have_posts() ) : the_post(); ?>

		<div class="section section1 text-center">
			<div class="wrapper sm">
				<h2 class="h2">What We Do</h2>
				<div class="text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				<div class="button">
					<a href="#" class="btn-default"><span>Learn More</span></a>
				</div>
			</div>
		</div>

	<?php endwhile; ?>	
</div>
<?php
get_footer();
