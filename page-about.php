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
                    <h2 class="col-title"><?php echo $row1_title ?></h2>
                  <?php } ?>

                  <?php if ($row1_text) { ?>
                    <div class="text"><?php echo $row1_text ?></div>
                  <?php } ?>
                </div>
             </div> 
            <?php } ?>
          </div>
        </div>
      </div>
      <?php } ?>

    <?php endwhile; ?>	
	</main>
</div>
<?php
get_footer();
