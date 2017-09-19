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


	$('#video-clips').bxSlider({
		mode: 'fade',
		preload: 'all',
		controls: false,		
		infiniteLoop: true,
		autoHover: false,
		autoStart: false,
		auto: false,
		speed: 500,
		touchEnabled: true		
  	});
});
</script>
<div id="homepage">
	<div id="index-slides">
		<ul class="bxslider">
			<li class="slider-1">
				<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/mobile/index-slide-1.jpg');"><a href="<?php echo site_url('spirit')?>"></a></div>
			</li>
			<li>
				<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/mobile/index-slide-sssj.jpg');"><a href="<?php echo site_url('real-estate/sz-shishan')?>"></a></div>
			</li>
			<li>
				<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/mobile/index-slide-geek.jpg');"><a href="http://www.sungeek.com.cn/"></a></div>
			</li>
		</ul>
	</div>	
	<div id="index-about">
		<div class="about-text">
			<h2 class="header">关于上坤</h2>
			<div class="sep line"></div>
			<div class="text">上坤股份成立于2009年，系深圳盈信集团投资有限公司成员企业，以房地产开发、地产金融、商业资产管理为公司主营业务。</div>
			<div class="text">上坤精耕上海，城市发展布局长三角核心经济城市和深广经济圈，旨在打造更宜居的产品，拒绝产品复制、关注客户体验，不断从使用者的角度出发，做出“被需要”的产品，用设计、科技、人文赋予产品全新的生命力。</div>
			<div class="link-button"><a href="<?php echo site_url('about')?>">查看更多</a></div>
		</div>
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
	<div id="index-branches">		
		<img src="<?php echo get_template_directory_uri()?>/images/mobile/index-branches.jpg" width="100%" style="vertical-align:bottom" />
		<div class="branches-text">
			<h2 class="header red">核心业务</h2>		
			<div class="sep line"></div>			
			<div class="link-button"><a href="<?php echo site_url('real-estates')?>">地产开发</a></div>
			<div class="link-button"><a href="<?php echo site_url('commercial-assets/')?>">商业资产管理</a></div>
			<div class="link-button"><a href="<?php echo site_url('fund')?>">地产基金</a></div>
		</div>
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
	<div id="index-video">	
		<h2 class="header red">企业视频</h2>
		<div class="sep line"></div>		
		<div id="video-clips">	
			<div>		
				<video height="auto" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri()?>/images/mobile/index-video.jpg"><source src="<?php echo site_url('sunkwan-video.mp4')?>" type="video/mp4"></video>
			</div>
			<div>
				<video height="auto" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri()?>/images/mobile/index-video-clip-2.jpg"><source src="<?php echo site_url('sunkwan-video-wanhui.mp4')?>" type="video/mp4"></video>
			</div>
			<div>
				<video height="auto" preload="metadata" controls="controls" poster="<?php echo get_template_directory_uri()?>/images/mobile/index-video-clip-team.jpg"><source src="<?php echo site_url('sunkwan-video-team.mp4')?>" type="video/mp4"></video>
			</div>
		</div>		
	</div>
</div>
<?php get_footer();?>
