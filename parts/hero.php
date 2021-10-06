<?php  
$banner = get_field("banner"); 
$count = 0;
$hero_type = '';
$hero_video = 'images';
if( is_front_page() || is_home() ) {
	$banner = get_field("banner");
	$count = ($banner) ? count($banner) : 0;
	$slidesId = ($count>1) ? 'slideshow':'static-banner';
  $hero_type = get_field('hero_type');
  $hero_video = get_field('hero_video');
}
if( $banner ){ ?>


		<?php 
    /* HOME */
    if( is_front_page() || is_home() ) { ?>

      <?php if ( $hero_type=='video' ) { ?>

        <?php if ($hero_video) { ?>
        <div id="static-banner" class="video-hero">
          <div class="swiper-wrapper">
            <div class="swiper-slide hero">
              <video width="960" height="720" autoplay controls muted loop>
                <?php if ($hero_video) { ?>
                  <source src="<?php echo $hero_video['url'] ?>" type="video/mp4">
                <?php } ?>
                Your browser does not support the video tag.
              </video>
              <img src="<?php echo get_images_dir('rectangle.png') ?>" alt="" class="video-helper" />
            </div>
          </div>
        </div>
        <?php } ?>

      <?php } else { ?>
        
        <!-- SLIDER IMAGES -->
        <div id="<?php echo $slidesId ?>" class="swiper-container">
          <div class="swiper-wrapper">
          <?php $j=1; foreach ($banner as $b) { 
            $image = $b['image'];
            $caption = $b['caption'];
            if($image) { ?>
            <div class="swiper-slide hero" data-slide="slide<?php echo $j?>">
              <div class="hero-image" style="background-image:url('<?php echo $image['url'] ?>')"></div>
            </div>
            <?php $j++; } ?>
          <?php } ?>
          </div>
        </div>

      <?php } ?>

    <?php if ($count) { ?>

    <!-- HERO CAPTIONS -->
    <div class="sliderTexts">

      <?php if ( $hero_type=='video' ) { ?>

        <?php 
        $hero_videoTxt = get_field("hero_video_text"); 
        $hero_videoBtn = get_field("hero_video_button"); 
        $button_target = ( isset($hero_videoBtn['target']) ) ? $hero_videoBtn['target'] : '_self';
        $button_text = ( isset($hero_videoBtn['title']) ) ? $hero_videoBtn['title'] : '';
        $button_link = ( isset($hero_videoBtn['url']) ) ? $hero_videoBtn['url'] : '';
        ?>
        <div class="slideCaption active">
          <?php if ($hero_videoTxt) { ?>
          <div class="textwrap">
            <div class="inner text-center">
              <div class="text"><?php echo $hero_videoTxt ?></div>
              <?php if ($button_text && $button_link) { ?>
              <div class="button">
                <a href="<?php echo $button_link ?>" class="btn-default"><span><?php echo $button_text ?></span></a>
              </div>
              <?php } ?>
            </div>
          </div>
          <?php } ?>
        </div>

      <?php } else { ?>

        <?php $j=1; foreach ($banner as $b) { 
          $image = $b['image'];
          $caption = $b['caption'];
          $btn = $b['button'];
          $button_target = ( isset($btn['target']) ) ? $btn['target'] : '_self';
          $button_text = ( isset($btn['title']) ) ? $btn['title'] : '';
          $button_link = ( isset($btn['url']) ) ? $btn['url'] : '';
          if($image) { ?>

            <div class="slideCaption slide<?php echo $j?><?php echo ($j==1) ? ' active':'' ?>" data-slide="slide<?php echo $j?>">
              <?php if ($caption) { ?>
              <div class="textwrap">
                <div class="inner text-center">
                  <div class="text"><?php echo $caption ?></div>
                  <?php if ($button_text && $button_link) { ?>
                  <div class="button">
                    <a href="<?php echo $button_link ?>" class="btn-default"><span><?php echo $button_text ?></span></a>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
            </div>

          <?php $j++; } ?>
        <?php } ?>

        <?php if ($count>1) { ?>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <?php } ?>
      <?php } ?>
    </div>
    <?php } ?>



		<?php } else { ?>

    <?php /* SUBPAGE */ ?>
      <div class="subpage-banner">
        <div class="banner-image" style="background-image:url(<?php echo $banner['url'] ?>)">
          <div class="titlediv">
            <div class="inner"><h1><?php echo get_the_title(); ?></h1></div>
          </div>
        </div>
        <img src="<?php echo get_images_dir('rectangle.png') ?>" alt="" class="helper">
      </div>

    <?php } ?>




<?php } ?>