<?php
get_header();
?>
<div class="banner cover news"></div>
<div class="primary content single">
	<div class="breadcrumb">
		<a href="<?php echo site_url();?>">首页</a>
		<span class="triangle-right"></span>
		<?php 
			$post = get_queried_object();
			$terms = (get_the_terms($post, 'category'));
			$term = $terms[count($terms)-1]; // If mutiple category, use the last one			
		?>	
		<a href="<?php echo get_category_link($term->term_id);?>"><?php echo $term->name; ?></a>
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
			<?php 
				$the_query = new WP_Query(['category_name' => $term->slug, 'post_type' => 'post', 'posts_per_page' => 10, 'post__not_in' => [get_the_ID()]]); 
				if ( $the_query->have_posts() ) :
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
			?>
			<li><a href="<?php the_permalink()?>"><?php the_title();?></a><span class="date"><?php the_date();?></span></li>
			<?php 					
					endwhile;					
				endif;
			?>
			</ul>
		</div>		
	</div>	
	<div class="article side">
		<div class="ad">
			<img src="<?php echo get_template_directory_uri()?>/images/ads/side-ad-1.jpg" />
		</div>
	</div>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>    
