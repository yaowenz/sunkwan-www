<?php get_header(); ?>
<script>
(function(t, i) {
    var e = {
        id: "#cardArea",
        sid: ".card-item"
    };
    i.fn.cardArea = function(t) {
        var t = i.extend({}, e, t);
        return this.each(function() {
            var e = i(t.id),
            n = e.find(t.sid);
            n.on("mouseenter",
            function() {
                i(this).addClass("active").siblings().removeClass("active");
                jQuery('#cardArea .layer').removeClass('active');
                i(this).find('.layer').addClass('active');
            })
        })
    };
} (window, jQuery));

jQuery(function($) {	
	// 四块缩略图区域
    jQuery("#cardArea").cardArea()
    
    // animation
    var sliderAnimation1 = anime.timeline({
        loop: false,
        autoplay: false
    });    
    sliderAnimation1.pause();
    sliderAnimation1
    .add({
      targets: '#index-slides .slider-1 .title-wei',
      opacity: 1,     
      easing: 'linear',
      duration: 250,
    })
    .add({
      targets: '#index-slides .slider-1 .title-yiju',
      opacity: 1,     
      easing: 'linear',
      duration: 500
    })
    .add({
      targets: '#index-slides .slider-1 .title-er',
      opacity: 1,     
      easing: 'linear',
      duration: 100      
    })
    .add({
        targets: '#index-slides .slider-1 .title-lai',
        opacity: 1,     
        easing: 'linear',
        duration: 500        
     })
     .add({
        targets: '#index-slides .slider-1 .title-coming',
        translateX: -100,
        opacity: 1,     
        easing: 'easeOutCubic',
        duration: 500        
     })
     .add({
    	 targets: '#index-slides .slider-1 .bg-image',
    	 scale: 1.05,
    	 opacity: 1,    	
         offset: 0,
         duration: 2000,
         easing: 'easeOutCubic'
     });
    
    // Slider
    jQuery('.bxslider').bxSlider({
		mode: 'fade',
		preload: 'all',
		controls: false,
		infiniteLoop: true,
		autoHover: true,
		autoStart: true,
		auto: true,
		speed: 1000,
		pause: 3500,		
		onSlideAfter: function ($slideElement, oldIndex, newIndex) {			
			if(newIndex == 1) {
				sliderAnimation1.restart();
			}
		},
		onSlideBefore: function ($slideElement, oldIndex, newIndex) {
			sliderAnimation1.pause();	
			sliderAnimation1.seek(1);
		},
		onSliderLoad: function (currentIndex) {			
			//sliderAnimation1.pause();      
			if(currentIndex == 1) {				
        		sliderAnimation1.play();
			}
		}
  	}); 

  	// 城市切换
  	$('.card.layer.projects select').change(function() {
  		location.href = '<?php echo site_url('real-estates') ?>';  	
  	});

  	 // 集团新闻滚动
	var newsSlider = $('.tab-news .bxslider-news').bxSlider({
		mode: 'horizontal',
		preload: 'all',
		controls: false,
		infiniteLoop: true,
		autoHover: true,
		autoStart: true,
		auto: true,
		speed: 500,
		pause: 3000,		
  	});

	var eventsSlider;

  	var sliderCollection = {
  		news: newsSlider,
  		events: eventsSlider
  	};  	

  	// 新闻切换
  	$('.news-category a').click(function() {
  	  	var tab = $(this).data('tab');  	  	
  		$('.news-category a').removeClass('active');
  		$(this).addClass('active');
  		$('.news-list').removeClass('active');
  		$('.news-list.tab-' + tab).addClass('active');  

		// Should init here, to calc the size
  		if (tab == 'events' && eventsSlider == null) {
  	  		eventsSlider = $('.tab-events .bxslider-news').bxSlider({
  	  			mode: 'horizontal',
  	  			preload: 'all',
  	  			controls: false,
  	  			infiniteLoop: true,
  	  			autoHover: true,
  	  			autoStart: true,
  	  			auto: true,
  	  			speed: 500,
  	  			pause: 3000,		
  	  	  	});
  	  	  	sliderCollection['events'] = eventsSlider;
  	  	}	
  		sliderCollection[tab].reloadSlider();
  	}); 


  	// 视频切换
 	var videoSlider = $('#video-clips').bxSlider({
		mode: 'horizontal',
		preload: 'all',
		controls: true,
		infiniteLoop: true,
		autoHover: false,
		autoStart: false,
		auto: false,
		speed: 500,
		pause: 3000,	
		pager: false	
  	});	
  	 	  
});

function playVideo(src) {
    layer.open({
		type: 1,
		title: '',
		resize: false,
		area: ['856px', '490px'], //宽高
		content: '<video id="sunkwan_video" width="856" height="480" preload="auto" controls="controls"><source src="' + src + '" type="video/mp4"></video>',
		success: function() {
			jQuery('#sunkwan_video')[0].play();
		}
  	});  
}

</script>
<div id="index-slides">
	<ul class="bxslider">
		<li class="slider-0">
			<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-0.jpg');"></div>
		</li>
		<li class="slider-1">
			<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-1.jpg');"></div>
			<img class="title-wei" src="<?php echo get_template_directory_uri()?>/images/title-wei.png" />
			<img class="title-yiju" src="<?php echo get_template_directory_uri()?>/images/title-yiju.png" />
			<img class="title-er" src="<?php echo get_template_directory_uri()?>/images/title-er.png" />
			<img class="title-lai" src="<?php echo get_template_directory_uri()?>/images/title-lai.png" />			
			<img class="title-coming" src="<?php echo get_template_directory_uri()?>/images/title-coming.png" />
		</li>		
		<li>
			<div class="bg-image"style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-2.jpg');"><a href="<?php echo site_url('real-estate/sz-shishan')?>" target="_blank"></a></div>
		</li>	
		<li>
			<div class="bg-image" style="background-position:top center;background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-3.jpg');"><a href="<?php echo site_url('real-estate/sh-yueshan')?>" target="_blank"></a></div>
		</li>
		<li>
			<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-geek.jpg');"><a href="http://www.sungeek.com.cn/" target="_blank"></a></div>
		</li>
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
				<p class="title">企业视频</p>
				<p class="title eng">Intro<p>
				<div class="card-icon">
					<img style="cursor:pointer" onclick="playVideo()" src="<?php echo get_template_directory_uri()?>/images/icon-player.png" />
				</div>
			</div>
			<div class="video-clip-wrapper">
				<ul id="video-clips">
					<li>						
						<img src="<?php echo get_template_directory_uri()?>/images/index-video-clip-1.jpg" />
						<img class="btn-play" onclick="playVideo('<?php echo site_url('sunkwan-video.mp4')?>');" src="<?php echo get_template_directory_uri()?>/images/icon-player.png" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri()?>/images/index-video-clip-2.jpg" />
						<img class="btn-play" onclick="playVideo('<?php echo site_url('sunkwan-video-wanhui.mp4')?>');"  src="<?php echo get_template_directory_uri()?>/images/icon-player.png" />
					</li>
					<li>
						<img src="<?php echo get_template_directory_uri()?>/images/index-video-clip-team.jpg" />
						<img class="btn-play" onclick="playVideo('<?php echo site_url('sunkwan-video-team.mp4')?>');"  src="<?php echo get_template_directory_uri()?>/images/icon-player.png" />
					</li>
				</ul>
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
