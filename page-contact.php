<?php
/*
 * Template Name: Contact Us
 */
get_header(); ?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

      <div class="page-content wrapper">
        <header class="entry-title"><h1 class="page-title"><?php the_title(); ?></h1></header>
        <section class="entry-content"><?php the_content(); ?></section>
      </div>

      <?php  
      $contact_form = get_field("contact_form_shortcode");
      $map_embed = get_field("map_embed");
      $address = get_field('address','option');
      $phone = get_field('phone','option');
      $email = get_field('email','option');
      $contact_info = array($address,$phone,$email);
      ?>

      <?php if ( ($contact_form && do_shortcode($contact_form) ) || $map_embed ) { ?>
      <div class="contact-form-wrapper">
        <div class="wrapper">
          <div class="flexwrap">

            <?php if( ($contact_info && array_filter($contact_info)) || $contact_form && do_shortcode($contact_form) ) { ?>
            <div class="fcol formcol">

              <?php if ($contact_info && array_filter($contact_info)) { ?>
              <div class="contact-info-icons">
                <?php if ( $address ) { ?>
                <div class="info-icon address"><?php echo $address ?></div>  
                <?php } ?>

                <?php if ( $phone ) { ?>
                <div class="info-icon phone"><?php echo $phone ?></div>  
                <?php } ?>

                <?php if ( $email ) { ?>
                <div class="info-icon email"><a href="mailto:<?php echo antispambot($email,1) ?>"><?php echo antispambot($email) ?></a></div>  
                <?php } ?>
              </div>
              <?php } ?>
              
              <?php if ( do_shortcode($contact_form) ) { ?>
                <div class="contact-form">
                  <?php echo do_shortcode($contact_form); ?>
                </div>
              <?php } ?>
            </div> 
            <?php } ?>

            <?php if( $map_embed ) { ?>
            <div class="fcol mapcol">
              <div class="mapframe"><?php echo $map_embed; ?></div>
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
