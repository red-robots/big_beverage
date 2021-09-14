	</div><!-- #content -->
	
  <?php  
  $address = get_field('address','option');
  $phone = get_field('phone','option');
  $email = get_field('email','option');
  $footer_logo = get_field('footer_logo','option');
  $social_media = get_social_media();
  ?>
	<footer id="colophon" class="site-footer" role="contentinfo">
    <?php if ($footer_logo) { ?>
		<div class="foot-logo-area">
			<span>
				<img src="<?php echo $footer_logo['url'] ?>" alt="<?php echo $footer_logo['title'] ?>" class="foot-logo">
			</span>
		</div>
    <?php } ?>
		<div class="footer-info wrapper">
			<div class="wrap">
				<div class="inner">
          <?php if ($address) { ?>
					<div class="f-info">
						<span><?php echo $address ?></span>
					</div>
          <?php } ?>

          <?php if ($phone) { ?>
					<div class="f-info">
						<a href="tel:<?php echo format_phone_number($phone) ?>"><?php echo $phone ?></a>
					</div>
          <?php } ?>

          <?php if ($email) { ?>
					<div class="f-info">
						<a href="mailto:<?php echo antispambot($email,1) ?>"><?php echo antispambot($email) ?></a>
					</div>
          <?php } ?>

          <?php if ( $social_media ) { ?>
					<div class="f-info social-media">
            <?php foreach ($social_media as $s) { 
              $sm_link = $s['url'];
              $sm_icon = $s['icon'];
              $sm_type = $s['type'];
              ?>
              <a href="<?php echo $sm_link ?>" target="_blank" class="<?php echo $sm_type ?>" aria-label="<?php echo ucwords($sm_type) ?>"><i class="<?php echo $sm_icon ?>"></i></a>
            <?php } ?>
					</div>
          <?php } ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	
</div><!-- #page -->
<?php wp_footer(); ?>
</body>
</html>
