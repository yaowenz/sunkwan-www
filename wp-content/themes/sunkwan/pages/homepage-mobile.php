<?php get_header(); ?>
<script>
jQuery(function($) {	
	$('.bxslider').bxSlider({
		mode: 'fade',
		preload: 'all',
		controls: false,
		infiniteLoop: true,
		autoHover: true,
		autoStart: true,
		auto: true,
		speed: 1000,
		pause: 3500,
		touchEnabled: true	
	
  	}); 
});
</script>
<div id="homepage">
	<div id="index-slides">
		<ul class="bxslider">
			<li class="slider-1">
				<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/mobile/index-slide-1.jpg');"></div>
			</li>
			<li>
				<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/mobile/index-slide-geek.jpg');"><a href="http://www.skgeek.com" target="_blank"></a></div>
			</li>
		</ul>
	</div>
	<div id="index-news">
		<h2 class="header red">新闻中心</h2>
		<div class="sep line"></div>
		<ul>
			<?php 
				$the_query = new WP_Query(['category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 4] );
			
				if ( $the_query->have_posts() ) :
					$count = $the_query->post_count;						
					while ( $the_query->have_posts() ) :
						$the_query->the_post();					
			?>
			<li data-link="<?php the_permalink()?>">
				<p class="date"><?php the_date();?></p>
				<p class="title"><a href="<?php the_permalink()?>"><?php the_title();?></a></p>			
				<p class="thumb"><a href="<?php the_permalink()?>"><img src="<?php echo the_post_thumbnail_url();?>" /></a></p>
			
			</li>
			<?php 	
					endwhile;					
				endif;
			?>
		</ul>
		<div class="link-button"><a href="<?php echo site_url('category/news')?>">查看更多</a></div>
	</div>
	<div id="index-culture">	
		<div class="culture-image">
			<img src="<?php echo get_template_directory_uri()?>/images/mobile/index-culture.jpg" width="100%" style="vertical-align:bottom" />
		</div>
		<div class="culture-text">
			<h2 class="header red">品牌文化</h2>
			<div class="sep line"></div>
			<div class="text">为宜居而来</div>
			<div class="text">满足客户对家与美好生活的想象</div>
			<div class="link-button"><a href="<?php echo site_url('spirit')?>">查看更多</a></div>
		</div>
	</div>
	<div id="index-video">	
		<h2 class="header red">企业视频</h2>
		<div class="sep line"></div>
		<div style="width:80%;margin:auto">
			<video id="sunkwan_video" width="100%" height="auto" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri()?>/images/mobile/index-video.jpg"><source src="<?php echo site_url('sunkwan-video.mp4')?>" type="video/mp4"></video>
		</div>
	</div>
	<div id="index-branches">		
		<img src="<?php echo get_template_directory_uri()?>/images/mobile/index-branches.jpg" width="100%" style="vertical-align:bottom" />
		<div class="branches-text">
			<h2 class="header red">全国布局</h2>			
			<div class="link-button"><a href="<?php echo site_url('real-estates')?>">查看更多</a></div>
		</div>
	</div>
</div>


<?php get_footer();?>
