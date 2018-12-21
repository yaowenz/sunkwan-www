<div class="banner about cover"></div>
<div class="primary content about">
	<div class="sub-cover">
		<div class="about-logo">
			<img
				src="<?php echo get_template_directory_uri()?>/images/about-banner.jpg"
				width="100%" />
		</div>
		<div class="about-slogon">
			<img
				src="<?php echo get_template_directory_uri()?>/images/about-slogan.png" />
		</div>
		<div class="about-title">
			<img
				src="<?php echo get_template_directory_uri()?>/images/about-title.png" />
		</div>
	</div>
	<div class="article">
		<div class="section intro">
			<div class="text">
				<?php the_post();?>
				<?php the_content();?>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>