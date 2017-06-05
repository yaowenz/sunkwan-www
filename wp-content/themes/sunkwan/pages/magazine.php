<div class="banner r cover news"></div>
<div class="primary content magazine">
	<div class="breadcrumb">
		<a href="<?php echo site_url();?>">首页</a>
		<span class="triangle-right"></span>
		<a>电子内刊</a>
	</div>
	<div class="article">		
		<?php 
		$the_query = new WP_Query(['category_name' => 'magazines', 'post_type' => 'post', 'posts_per_page' => -1] );

		// The Loop
		if ( $the_query->have_posts() ) :
			while ( $the_query->have_posts() ) :
				$the_query->the_post();
		
				$link = '';
				// Get the download link
				$content = get_the_content();
				$matches = [];
				if (preg_match('/a href="(\S+.pdf)"/', $content, $matches)) :
					$link = $matches[1];
				endif;
		?>		
		<div class="doc">
			<div class="thumb" data-pdf="<?php echo $link?>" style="background-image:url('<?php echo the_post_thumbnail_url();?>')"></div>
			<div class="download">
				<p class="title"><?php the_title();?></p>
				<p class="link"><a href="<?php echo $link?>"><img src="<?php echo get_template_directory_uri()?>/images/icon-download.png"></a>
			</div>
		</div>	
		<?php 
			/* Restore original Post Data */
			endwhile;
			wp_reset_postdata();
		 endif; ?>
		 <div class="clearfix"></div>
	</div>
</div>
<script>
jQuery(function($) {
	$('.doc .thumb').click(function() {
		location.href = $(this).data('pdf');
	});
});
</script>