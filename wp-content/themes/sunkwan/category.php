<?php get_header(); ?>
<div class="banner cover news"></div>
<div class="primary content news">
	<div class="breadcrumb">
		<a href="<?php echo site_url();?>">首页</a>
		<span class="triangle-right"></span>
		<?php $category = get_queried_object();	?>
		<a href="<?php echo get_category_link($category)?>"><?php single_cat_title();?></a>
	</div>
	<div class="wrapper">		
		<div class="article left">			
			<div class="section-content" style="margin-top:30px">
				<ul class="entry-list">				
				<?php while ( have_posts() ) : the_post();	?>	
					<li>
						<div class="thumb">
							<a href="<?php echo get_permalink(); ?>"><img src="<?php echo the_post_thumbnail_url();?>" width="100%" /></a>
						</div>
						<div class="brief">
							<p><a href="<?php echo get_permalink(); ?>"><?php the_title();?></a></p>
							<p class="entry-date"><?php echo get_the_date('Y/m/d');?></p>
						</div>
						<div class="clear"></div>
					</li>
				<?php endwhile;	?>
				</ul>
			</div>
			<?php 
				the_posts_pagination(array(
					'screen_reader_text' => ' ',
					'prev_text'          => '上一页',
					'next_text'			 => '下一页',								
				));				
			?>			
		</div>	
		<div class="article side">
			<div class="ad">
				<img src="<?php echo get_template_directory_uri()?>/images/ads/side-ad-1.jpg" />
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<?php
get_footer();