<?php
/**
 * Template Name: About
 */
$banner = get_field("banner"); 
get_header(); ?>
<div id="primary" class="content-area-full page-about">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

      <?php if (empty($banner)) { ?>
        <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
      <?php } ?>
      
      <?php
      $row1_image = get_field("row1_image");
      $row1_title = get_field("row1_title");
      $row1_text = get_field("row1_text");
      $row1_class = ( $row1_image && ($row1_title || $row1_text) ) ? 'half':'full';
      if( $row1_image || ($row1_title || $row1_text) ) { ?>
      <div class="row1 section image-text-wrap <?php echo $row1_class ?>">
        <div class="wrapper">
          <div class="flexwrap">
            <?php if ($row1_image) { ?>
             <div class="fcol imagecol">
                <div class="wrap">
                  <div class="image">
                    <div class="img" style="background-image:url('<?php echo $row1_image['url'] ?>')"></div>
                    <img src="<?php echo get_images_dir('square.png') ?>" alt="" class="helper">
                  </div>
                  <span class="circle c1"></span>
                  <span class="circle c2"></span>
                  <span class="circle c3"></span>
                </div>
             </div> 
            <?php } ?>

            <?php if ($row1_title || $row1_text) { ?>
             <div class="fcol textcol">
                <div class="inner">
                  <?php if ($row1_title) { ?>
                    <h2 class="col-title blue"><?php echo $row1_title ?></h2>
                  <?php } ?>

                  <?php if ($row1_text) { ?>
                    <div class="text"><?php echo anti_email_spam($row1_text) ?></div>
                  <?php } ?>
                </div>
             </div> 
            <?php } ?>
          </div>
        </div>
      </div>
      <?php } ?>


      <?php  
      $row2_image = get_field("row2_image");
      $row2_title = get_field("row2_title");
      $row2_text = get_field("row2_text");
      $row2_class = ( $row2_image && ($row2_title || $row2_text) ) ? 'half':'full';
      if( $row2_image || ($row2_title || $row2_text) ) { ?>
      <div class="row2 section <?php echo $row2_class ?>">
        <div class="row-inner">
          <div class="wrapper">
            <?php if ($row2_title || $row2_text) { ?>
            <div class="flexwrap">
              <div class="textcol">
                <div class="wrap">
                  <?php if ($row2_title) { ?>
                  <h2 class="col-title blue"><?php echo $row2_title ?></h2> 
                  <?php } ?>

                  <?php if ($row2_text) { ?>
                  <div class="text"><?php echo anti_email_spam($row2_text) ?></div> 
                  <?php } ?>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>

          <?php if ( $row2_image ) { ?>
          <div class="imagewrap">
            <div class="inner">
              <div class="img" style="background-image:url('<?php echo $row2_image['url'] ?>')">
                <img src="<?php echo $row2_image['url'] ?>" alt="<?php echo $row2_image['title'] ?>">
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>


      <?php  
      $row3_image = get_field("row3_image");
      $row3_text = get_field("row3_text");
      $row3_class = ( $row2_image && $row3_text ) ? 'half':'full';
      if( $row3_image || $row3_text ) { ?>
      <div class="row3 section <?php echo $row3_class ?>">
        <div class="flexwrap">
          <?php if ($row3_text) { ?>
          <div class="fcol textcol">
            <?php if ($row3_text) { ?>
              <div class="text"><?php echo anti_email_spam($row3_text) ?></div> 
            <?php } ?>
          </div>
          <?php } ?>

          <?php if ($row3_image) { ?>
          <div class="fcol imagecol">
            <div class="img" style="background-image:url('<?php echo $row3_image['url'] ?>')">
              <img src="<?php echo $row3_image['url'] ?>" alt="<?php echo $row3_image['title'] ?>">
            </div>
          </div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>


      <?php  
      $row4_text = get_field("row4_text");
      $row4_button = get_field("row4_button");
      $row4BtnTarget = ( isset($row4_button['target']) && $row4_button['target'] ) ? $row4_button['target'] : '_self';
      $row4BtnTitle = ( isset($row4_button['title']) && $row4_button['title'] ) ? $row4_button['title'] : '';
      $row4BtnLink = ( isset($row4_button['url']) && $row4_button['url'] ) ? $row4_button['url'] : '';
      if( $row4_text ) { ?>
      <div class="row4 section bubble-bg bottom">
        <div class="row4-inner">
          <div class="wrapper text-center">
            <div class="fcol textcol">
              <?php if ($row4_text) { ?>
                <div class="text"><?php echo anti_email_spam($row4_text) ?></div> 
              <?php } ?>

              <?php if ($row4BtnTitle && $row4BtnLink) { ?>
                <div class="button"><a href="<?php echo $row4BtnLink ?>" target="<?php echo $row4BtnTarget ?>" class="btn-outline"><?php echo $row4BtnTitle ?></a></div> 
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>

    <?php endwhile; ?>	
	</main>
</div>
<script>
jQuery(document).ready(function($){
  // if( $(".imagewrap").length ) {
  //   var img_height = $(".imagewrap").height();
  //   $(".imagewrap div.img").css('height',img_height+'px');
  // }
});
</script>
<?php
get_footer();
