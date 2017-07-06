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


function playVideo() {
    layer.open({
		type: 1,
		title: '',
		resize: false,
		area: ['856px', '490px'], //宽高
		content: '<video id="sunkwan_video" width="856" height="480" preload="auto" controls="controls"><source src="<?php echo site_url('sunkwan-video.mp4')?>" type="video/mp4"></video>',
		success: function() {
			jQuery('#sunkwan_video')[0].play();
		}
  	});  
}

</script>
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
			$the_query = new WP_Query(['category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 6] );
		
			if ( $the_query->have_posts() ) :
				$count = $the_query->post_count;						
				while ( $the_query->have_posts() ) :
					$the_query->the_post();					
		?>
		<li data-link="<?php the_permalink()?>">
			<p class="title"><?php the_title();?></p>
			<p class="date"><?php the_date();?></p>
			<p class="thumb"><img src="<?php echo the_post_thumbnail_url();?>" /></p>
		
		</li>
		<?php 	
				endwhile;					
			endif;
		?>
	</ul>
</div>
<div id="intro-boxes">
	<ul id="cardArea" class="card-area clearfix">
		<li class="card-item active">
			<div class="card layer culture">
				<p class="title">品牌文化<p>
				<p class="title eng">Brand</p>
				<div class="card-icon">
					<img src="<?php echo get_template_directory_uri()?>/images/icon-sk.png" />
				</div>
				<div class="replace img"><a href="<?php echo site_url('spirit')?>"></a></div>
			</div>
		</li>
		<li class="card-item">
			<div class="card layer video">
				<div class="replace img"></div>
				<p class="title">企业视频</p>
				<p class="title eng">Intro<p>
				<div class="card-icon">
					<img style="cursor:pointer" onclick="playVideo()" src="<?php echo get_template_directory_uri()?>/images/icon-player.png" />
				</div>
			</div>
		</li>
		<li class="card-item">
			<div class="card layer projects">
				<select>
					<option>前往城市...</option>
					<option>上海</option>
					<option>苏州</option>
					<option>深圳</option>
					<option>合肥</option>
					<option>杭州</option>
					<option>南京</option>
				</select>
				<div class="replace img"></div>
				<p class="title">全国布局</p>			
				<p class="title eng">National Layout<p>				
			</div>
		</li>
	</ul>
	<div class="news-box">
		<div class="layer news">
			<p class="title">新闻动态</p>
			<p class="title eng">News</p>
			<p class="news-category">
				<a data-tab="news" class="active">集团新闻</a>
				<a data-tab="events">最新活动</a>
			</p>
			<!-- 集团新闻 -->
			<div class="tab-news active news-list">
				<div class="bxslider-news">
					<?php 
						$the_query = new WP_Query(['category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 6] );
						$index = 0;
						if ( $the_query->have_posts() ) :
							$count = $the_query->post_count;						
							while ( $the_query->have_posts() ) :
								$the_query->the_post();
								$index ++;
								if ($index % 2 == 1):
					?>
					<ul>
					<?php 
								endif;
					?>
						<li><span class="title"><a href="<?php the_permalink()?>" title="<?php the_title();?>"><?php echo wp_trim_words(get_the_title(), 25, '...');?></a></span><span><?php the_date();?></span></li>
					<?php
								if ($index % 2 == 0 || $index == $count):
					?>
					</ul>
					<?php 
								endif;
							endwhile;					
						endif;
					?>			
				</div>
			</div>
			<!-- 最新活动-->
			<div class="tab-events news-list">
				<div class="bxslider-news">				
				<?php 
					$the_query = new WP_Query(['category_name' => 'events', 'post_type' => 'post', 'posts_per_page' => 6] );
					$index = 0;
					$count = 0;
					if ( $the_query->have_posts() ) :								
						while ( $the_query->have_posts() ) :
							$the_query->the_post();
							$index ++;
							if ($index % 2 == 1):
				?>
				<ul>
				<?php 
							endif;
				?>
				
					<li><span class="title"><a href="<?php the_permalink()?> "title="<?php the_title();?>"><?php echo wp_trim_words(get_the_title(), 25, '...');?></a></span><span><?php the_date();?></span></li>
				<?php
							if ($index % 2 == 0 || $index == $count):
				?>
				</ul>
				<?php 
							endif;
						endwhile;					
					endif;
					wp_reset_postdata();
				?>			
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>
