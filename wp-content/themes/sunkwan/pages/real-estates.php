<script>
jQuery(function($) {
	$('.example').click(function() {		
		location.href = '<?php echo site_url('real-estates');?>/' + $(this).data('loc');
	});
});
</script>
<div class="banner real-estate cover">
	<div class="wrapper">
		<div class="title">地产开发</div>
		<div class="title eng">Real Estate Development</div>
	</div>
</div>
<div class="propaganda real-estate">
	<p class="red">为宜居而来</p>
	<p class="main">成为一家满足客户对家与美好生活想象的百年企业</p>
	<p class="eng">COMING FOR LIVABLE</p>
</div>
<div class="primary content real-estate">
	<div class="article">
		<div class="section villa">
			<div class="title"><span></span>高端别墅系</div>
			<div class="row">
				<div class="example" data-loc="sh-yueshan">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-skys.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">新城上坤樾山</div>
						<div class="content">上海63万方山水都会墅区大盘</div>
					</div>
				</div>
				<div class="example" data-loc="project-gytd">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-gytd.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤公园天地</div>
						<div class="content">顾村公园旁生态社区</div>
					</div>
				</div>
				<div class="example" data-loc="project-xhs">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-xhs.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤旭辉墅</div>
						<div class="content">海派低密高端别墅社区</div>
					</div>
				</div>
				<div class="example"></div>
				<div class="clearfix"></div>
			</div>			
		</div>
		<div class="triangle-bottom"></div>
		<div class="section green">
			<div class="title"><span></span>绿色建筑系</div>
			<div class="row">				
				<div class="example" data-loc="project-hsw">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-hsw.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤红树湾</div>
						<div class="content">绿色科技住宅宜居典范</div>
					</div>
				</div>
				<div class="example" data-loc="sz-shishan">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-sssj.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤狮山四季 / 苏州</div>
						<div class="content">美世低密精装智慧社区</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>			
		</div>
		<div class="triangle-bottom"></div>
		<div class="section young">
			<div class="title"><span></span>青年住宅系</div>
			<div class="row">
				<div class="example" data-loc="project-yuecheng">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-yc.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤乐城</div>
						<div class="content">北上海之心青年美好社区</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>			
		</div>
		<div class="triangle-bottom"></div>
		<div class="section commerical">
			<div class="title"><span></span>社区商业系</div>
			<div class="row">				
				<div class="example" data-loc="project-csgc">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-csgc.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤城市广场</div>
						<div class="content">上大旁开放式购物生活广场</div>
					</div>
				</div>
				<div class="example">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-skhj.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤红街</div>
						<div class="content">地铁上盖邻里中心</div>
					</div>
				</div>
				<div class="example">
					<div class="img" style="background-image:url('<?php echo get_template_directory_uri()?>/images/projects/project-sksj.jpg')"></div>
					<div class="description">
						<div class="square"></div>
						<div class="head">上坤上街</div>
						<div class="content">有态度的购物公园</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>			
		</div>
	</div>
</div>