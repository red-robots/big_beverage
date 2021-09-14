<?php
/**
 * The template for Home Page
 */
get_header(); ?>
<div id="primary" class="content-area home-content">
	<img src="<?php echo get_images_dir('home-overlay-1.png') ?>" alt="" aria-hidden="true" class="home-overlay" />
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
		$row1_title = get_field("row1_title");
		$row1_description = get_field("row1_description");
		$row1_btn = get_field("row1_button");
		$row1_btn_target = ( isset($row1_btn['target']) ) ? $row1_btn['target'] : '_self';
		$row1_btn_text = ( isset($row1_btn['title']) ) ? $row1_btn['title'] : '';
		$row1_btn_link = ( isset($row1_btn['url']) ) ? $row1_btn['url'] : '';
		?>

		<?php if ( $row1_title || $row1_description ) { ?>
		<div class="section section1 text-center">
			<div class="wrapper sm">
				<?php if ($row1_title) { ?>
				<h2 class="h2"><?php echo $row1_title ?></h2>
				<?php } ?>
				
				<?php if ($row1_description) { ?>
				<div class="text">
					<?php echo $row1_description ?>
				</div>
				<?php } ?>

				<?php if ($row1_btn_text && $row1_btn_link) { ?>
				<div class="button">
					<a href="<?php echo $row1_btn_link ?>" target="<?php echo $row1_btn_target ?>" class="btn-default"><span><?php echo $row1_btn_text ?></span></a>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php } ?>

		<?php  
		$row2_title = get_field("row2_title");
		$row2_description = get_field("row2_description");
		$row2_button = get_field("row2_button");
    $r2BtnTarget = ( isset($row2_button['target']) && $row2_button['target'] ) ? $row2_button['target'] : '_self';
    $r2BtnText = ( isset($row2_button['title']) && $row2_button['title'] ) ? $row2_button['title'] : '';
    $r2BtnLink = ( isset($row2_button['url']) && $row2_button['url'] ) ? $row2_button['url'] : '';
		$row2_featured_type = get_field("row2_featured_type");
    $has_video = true;
    $has_image = true;
    $has_2nd_col = false;
    $row2_video_url = '';
    $row2_video_thumb = get_field("row2_video_thumb");
    if( $row2_featured_type ) {
      $row2_video_url = get_field("row2_video_url");
      $row2_feat_img = get_field("row2_featured_image");
      if( $row2_featured_type == 'video' ) {
        $has_video = ($row2_video_url) ? $row2_video_url : '';
        $has_2nd_col = ($has_video) ? true : false;
      } else {
        $has_image = ($row2_feat_img) ? $row2_feat_img : '';
        $has_2nd_col = ($has_image) ? true : false;
      }
    }
		
    $row2_args = array($row2_title,$row2_description,$has_2nd_col);
    $row2_has_content = ( $row2_args && array_filter($row2_args) ) ? true : false;
    if($row2_has_content) { ?>
		<!--- DARK BLUE SECTION -->
		<div class="dark-blue-area">
			<div class="wrapper">
				<div class="flexwrap">
					
          <?php if ( $row2_title || $row2_description ) { ?>
          <div class="fcol text">
						<div class="align-middle">
							<div class="mid">
                <?php if ($row2_title) { ?>
                  <h2 class="h2"><?php echo $row2_title ?></h2>
                <?php } ?>
								
                <?php if ($row2_description) { ?>
								<div class="info">
									<?php echo anti_email_spam($row2_description); ?>
								</div>
                <?php } ?>

                <?php if ($r2BtnText && $r2BtnLink) { ?>
								<div class="button">
									<a href="<?php echo $r2BtnLink ?>" target="<?php echo $r2BtnTarget ?>" class="btn-default"><span><?php echo $r2BtnText ?></span></a>
								</div>
                <?php } ?>

								<!-- <a data-fancybox="video-gallery" data-src="https://vimeo.com/525349547">
								  <img src="http://i3.ytimg.com/vi/z2X2HaTvkl8/hqdefault.jpg" width="200" height="150" />
								</a> -->
							</div>
						</div>
					</div>
          <?php } ?>

          <?php if ( $has_2nd_col ) { ?>
					<div class="fcol image">

            <?php if( $row2_featured_type == 'video' ) { ?>

              <?php if ( $has_video ) { ?>
              <a data-fancybox="video-gallery" data-src="<?php echo $row2_video_url ?>" class="feat-image has-video">
                <?php if ($row2_video_thumb) { ?>
                  <span class="image" style="background-image:url('<?php echo $row2_video_thumb['url'] ?>')"></span>
                <?php } ?>
                <img src="<?php echo get_images_dir('rectangle-lg.png') ?>" alt="" aria-hidden="true" />
                <span class="playbtn"><i>Play</i></span>
              </a>
              <?php } ?>

            <?php } else { ?>

              <?php if($has_image) { ?>
              <div class="feat-image">
                <span class="image" style="background-image:url('<?php echo $row2_video_thumb['url'] ?>')"></span>
                <img src="<?php echo get_images_dir('rectangle-lg.png') ?>" alt="" aria-hidden="true" />
              </div>
              <?php } ?>

            <?php } ?>

					</div>
          <?php } ?>
				</div>
			</div>
		</div>
    <?php } ?>


    <?php  
    $row3_title = get_field('row3_title');
    $row3_features = get_field('row3_features');
    $row3_bottom = get_field('row3_bottom');

    $r3_text = ( isset($row3_bottom['text']) && $row3_bottom['text'] ) ? $row3_bottom['text'] : '';
    $r3_btn = ( isset($row3_bottom['button']) && $row3_bottom['button'] ) ? $row3_bottom['button'] : '';
    $r3_btn_target = ( isset($r3_btn['target']) && $r3_btn['target'] ) ? $r3_btn['target'] : '_self';
    $r3_btn_text = ( isset($r3_btn['title']) && $r3_btn['title'] ) ? $r3_btn['title'] : '';
    $r3_btn_link = ( isset($r3_btn['url']) && $r3_btn['url'] ) ? $r3_btn['url'] : '';

    if( $row3_features || $r3_text ) { ?>
		<!--- LIGHT BLUE SECTION -->
		<div class="light-blue-area">
      <?php if ($row3_title) { ?>
			<div class="titlediv">
				<div class="wrapper text-center">
					<h2 class="h2"><?php echo $row3_title ?></h2>
				</div>
			</div>
      <?php } ?>

      <?php if ($row3_features) { ?>
			<div class="why-bottom-area">
				<div class="circles">
					<div class="wrapper">
						<div class="flexwrap">

              <?php foreach ($row3_features as $e) { 
                $t1 = $e['title1'];
                $t2 = $e['title2'];
                $desc = $e['description'];
                $icon = $e['icon'];
                if ( $t1 || $t2 || $desc ) { ?>
  							<div class="circle">
  								<div class="inner">
  									<div class="pad">
  										<div class="pad2">
  											<img src="<?php echo get_images_dir('square.png') ?>" alt="" class="helper">
  											<div class="info text-center">
  												<div class="mid">
                            <?php if ($icon) { ?>
  													<div class="icon">
  														<img src="<?php echo $icon['url'] ?>" alt="" class="icon">
  													</div>
                            <?php } ?>

                            <?php if ( $t1 || $t2 ) { ?>
  													<h3 class="title">
                              <?php if ($t1) { ?><span class="blue"><?php echo $t1 ?></span><?php } ?>
                              <?php if ($t2) { ?><span class="dark"><?php echo $t2 ?></span><?php } ?>
  													</h3>
                            <?php } ?>

                            <?php if ($desc) { ?>
  													<div class="text"><?php echo $desc ?></div>
                            <?php } ?>
  												</div>
  											</div>
  										</div>	
  									</div>
  								</div>
  							</div>
                <?php } ?>

              <?php } ?>

							

						</div>
					</div>
				</div>


        <?php if ( $r3_text || ($r3_btn_text && $r3_btn_link) ) { ?>
  				<div class="bottom-caption">
  					<div class="wrapper">
  						<div class="inside">
                <?php if ( $r3_text ) { ?>
                <div class="text"><?php echo $r3_text ?></div>
                <?php } ?>
  							
                <?php if ( $r3_btn_text && $r3_btn_link ) { ?>
  							<div class="button">
  								<a href="<?php echo $r3_btn_link ?>" class="btn-default"><span><?php echo $r3_btn_text ?></span></a>
  							</div>
                <?php } ?>
  						</div>
  					</div>
  				</div>
         <?php } ?>

			</div>
      <?php } ?>
		</div>
    <?php } ?>

	<?php endwhile; ?>	
</div>
<?php
get_footer();
