<?php
get_header();
?>
<div class="banner cover news"></div>
<div class="primary content single">
	<div class="breadcrumb">
		<a href="<?php echo site_url();?>">首页</a>
		<span class="triangle-right"></span>
		<a><?php $categories = get_the_category(); echo $categories[0]->name; ?></a>
	</div>
	<div class="article left">
		<?php the_post();?>			
		<h3 class="sub"><?php the_title();?></h3>
		<p class="post-date"><?php the_date();?></p>
		<div class="post">
			<?php the_content();?>
		</div>		
		<!-- 更新新闻 -->
		<div class="more">
			<div class="title"><span></span>更多新闻</div>
			<ul>
				<li><a href="#">“筑梦同行·一路有你”2017上坤业主踏春活动圆满举行</a><span class="date">2017-05-19</span></li>
			</ul>
		</div>		
	</div>	
	<div class="article side">
		<div class="ad">
			<img src="<?php echo get_template_directory_uri()?>/images/article-ad-right.jpg" />
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>    
