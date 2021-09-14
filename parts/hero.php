<?php  
$banner = '';
$count = 0;
if( is_front_page() || is_home() ) {
	$banner = get_field("banner");
	$count = ($banner) ? count($banner) : 0;
	$slidesId = ($count>1) ? 'slideshow':'static-banner';
}
if( $banner ){ ?>
<!-- SLIDER IMAGES -->
<div id="<?php echo $slidesId ?>" class="swiper-container">
	<div class="swiper-wrapper">

		<?php if( is_front_page() || is_home() ) { ?>
			<?php $j=1; foreach ($banner as $b) { 
				$image = $b['image'];
				$caption = $b['caption'];
				if($image) { ?>
				<div class="swiper-slide hero" data-slide="slide<?php echo $j?>">
					<div class="hero-image" style="background-image:url('<?php echo $image['url'] ?>')"></div>
				</div>
				<?php $j++; } ?>
			<?php } ?>
		<?php } ?>
	</div>
</div>

<?php if ($count) { ?>
<!-- SLIDER CAPTIONS -->
<div class="sliderTexts">
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
</div>
<?php } ?>



<?php } ?>