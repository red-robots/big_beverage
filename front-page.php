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

		<!--- DARK BLUE SECTION -->
		<div class="dark-blue-area">
			<div class="wrapper">
				<div class="flexwrap">
					<div class="fcol text">
						<div class="align-middle">
							<div class="mid">
								<h2 class="h2">Our Factory</h2>
								<div class="info">
									<p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
								<div class="button">
									<a href="#" class="btn-default"><span>Learn More</span></a>
								</div>
							</div>
						</div>
					</div>
					<div class="fcol image">
						<a href="#" class="feat-image has-video">
							<span class="image" style="background-image:url('<?php echo get_images_dir('dev/sample.jpg') ?>')"></span>
							<img src="<?php echo get_images_dir('rectangle-lg.png') ?>" alt="" aria-hidden="true" />
							<span class="playbtn"><i>Play</i></span>
						</a>
					</div>
				</div>
			</div>
		</div>

		<!--- LIGHT BLUE SECTION -->
		<div class="light-blue-area">
			<div class="titlediv">
				<div class="wrapper text-center">
					<h2 class="h2">Why Big Beverages?</h2>
				</div>
			</div>

			<div class="why-bottom-area">
				<div class="circles">
					<div class="wrapper">
						<div class="flexwrap">

							<div class="circle">
								<div class="inner">
									<div class="pad">
										<div class="pad2">
											<img src="<?php echo get_images_dir('square.png') ?>" alt="" class="helper">
											<div class="info text-center">
												<div class="mid">
													<div class="icon">
														<img src="<?php echo get_images_dir('dev/icon-distribution.png') ?>" alt="" class="icon">
													</div>
													<h3 class="title">
														<span class="blue">Maximized</span>
														<span class="dark">Distribution</span>
													</h3>
													<div class="text">
														Based in Charlotte, NC, our central location is your strategic advantage. Ship product to 70% of the U.S. population in just one day.
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>

							<div class="circle">
								<div class="inner">
									<div class="pad">
										<div class="pad2">
											<img src="<?php echo get_images_dir('square.png') ?>" alt="" class="helper">
											<div class="info text-center">
												<div class="mid">
													<div class="icon">
														<img src="<?php echo get_images_dir('dev/icon-quality.png') ?>" alt="" class="icon">
													</div>
													<h3 class="title">
														<span class="blue">High-Quality</span>
														<span class="dark">Production</span>
													</h3>
													<div class="text">
														Your brand’s reputation depends on the quality of your product. Our facility features cutting-edge technology and equipment so your products are made with absolute precision, every time.
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>

							<div class="circle">
								<div class="inner">
									<div class="pad">
										<div class="pad2">
											<img src="<?php echo get_images_dir('square.png') ?>" alt="" class="helper">
											<div class="info text-center">
												<div class="mid">
													<div class="icon">
														<img src="<?php echo get_images_dir('dev/icon-staff.png') ?>" alt="" class="icon">
													</div>
													<h3 class="title">
														<span class="blue">Experienced</span>
														<span class="dark">Staff</span>
													</h3>
													<div class="text">
														With 70 years of experience in the beverage industry, we know what goes into a good product. Every employee is like family and plays an important role in helping you succeed.
													</div>
												</div>
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="bottom-caption">
					<div class="wrapper">
						<div class="inside">
							<div class="text">
								CONTACT US TODAY FOR BEVERAGE MANUFACTURING YOU CAN RELY ON.
							</div>
							<div class="button">
								<a href="#" class="btn-default"><span>Get Started</span></a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	<?php endwhile; ?>	
</div>
<?php
get_footer();
