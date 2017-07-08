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
				$the_query = new WP_Query(['category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 6] );
			
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
		<div class="link-button">查看更多</div>
	</div>
	<div id="index-culture">	
		<div class="culture-image">
			<img src="<?php echo get_template_directory_uri()?>/images/mobile/index-culture.jpg" width="100%" />
		</div>
		<div class="culture-text">
			<h2 class="header red">品牌文化</h2>
			<div class="sep line"></div>
			<div class="text">为宜居而来</div>
			<div class="text">满足客户对家与美好生活的想象</div>
			<div class="link-button">查看更多</div>
		</div>
	</div>
	<div id="index-video">	
		<h2 class="header red">企业视频</h2>
		<div class="sep line"></div>
		<div style="width:80%;margin:auto">
			<video id="sunkwan_video" width="100%" height="auto" preload="auto" controls="controls" poster="<?php echo get_template_directory_uri()?>/images/index-video2.jpg"><source src="<?php echo site_url('sunkwan-video.mp4')?>" type="video/mp4"></video>
		</div>
	</div>
</div>
<div>
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
</div>

<?php get_footer();?>
