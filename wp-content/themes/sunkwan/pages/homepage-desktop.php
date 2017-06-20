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
		pause: 3000,		
		onSlideAfter: function ($slideElement, oldIndex, newIndex) {			
			if(newIndex == 0) {
				sliderAnimation1.restart();
			}
		},
		onSlideBefore: function ($slideElement, oldIndex, newIndex) {
			sliderAnimation1.pause();	
			sliderAnimation1.seek(0);
		},
		onSliderLoad: function (currentIndex) {			
			//sliderAnimation1.pause();      
			if(currentIndex == 0) {				
        		sliderAnimation1.play();
			}
		}
  	}); 

  	// 城市切换
  	$('.card.layer.projects select').change(function() {
  		location.href = '<?php echo site_url('real-estates') ?>';  	
  	});

  	// 新闻切换
  	$('.news-category a').click(function() {
  		$('.news-category a').removeClass('active');
  		$(this).addClass('active');
  		$('ul.news-list').removeClass('active');
  		$('ul.news-list.tab-' + $(this).data('tab')).addClass('active');
  	});
  	 	  
});

function playVideo() {
    layer.open({
		type: 1,
		title: '',
		resize: false,
		area: ['856px', '490px'], //宽高
		content: '<video id="sunkwan_video" preload="auto" controls="controls"><source src="<?php echo site_url('sunkwan-video.mp4')?>" type="video/mp4"></video>',
		success: function() {
			jQuery('#sunkwan_video')[0].play();
		}
  	});  
}

</script>
<div id="index-slides">
	<ul class="bxslider">
		<li class="slider-1">
			<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-1.jpg');"></div>
			<img class="title-wei" src="<?php echo get_template_directory_uri()?>/images/title-wei.png" />
			<img class="title-yiju" src="<?php echo get_template_directory_uri()?>/images/title-yiju.png" />
			<img class="title-er" src="<?php echo get_template_directory_uri()?>/images/title-er.png" />
			<img class="title-lai" src="<?php echo get_template_directory_uri()?>/images/title-lai.png" />			
			<img class="title-coming" src="<?php echo get_template_directory_uri()?>/images/title-coming.png" />
		</li>
		<li>
			<div class="bg-image" style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-geek.jpg');"><a href="http://www.skgeek.com" target="_blank"></a></div>
		</li>	
		<li>
			<div class="bg-image"style="background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-2.jpg');"></div>
		</li>	
		<li>
			<div class="bg-image" style="background-position:top center;background-image:url('<?php echo get_template_directory_uri()?>/images/index-slide-3.jpg');"></div>
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
				<div class="replace img"><a href="<?php echo site_url('about')?>/#section-spirit"></a></div>
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
				<p class="title eng">Arrangements<p>				
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
			<p>
			<ul class="news-list tab-news active">
			<?php 
				$the_query = new WP_Query(['category_name' => 'news', 'post_type' => 'post', 'posts_per_page' => 2] ); 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
			?>
			<li><a href="<?php the_permalink()?>"><span class="title"><?php the_title();?></span></a><span><?php the_date();?></span></li>
			<?php 					
					endwhile;					
				endif;
			?>				
			</ul>
			<ul class="news-list tab-events">
			<?php 
				$the_query = new WP_Query(['category_name' => 'events', 'post_type' => 'post', 'posts_per_page' => 2] ); 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
			?>
			<li><a href="<?php the_permalink()?>"><span class="title"><?php the_title();?></span></a><span><?php the_date();?></span></li>
			<?php 					
					endwhile;					
				endif;
				wp_reset_postdata();?>	
			</ul>
		</div>
	</div>
</div>

<?php get_footer();?>
