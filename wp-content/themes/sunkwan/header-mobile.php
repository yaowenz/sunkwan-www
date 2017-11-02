<!-- Nav -->
<div id="nav">
	<div class="header wrapper">
		<div class="menu-link menu-toggle-button">
			<img src="<?php echo get_template_directory_uri()?>/images/mobile/icon-menu.png" valign="middle" height="40%" />
		</div>
		<div class="sunkwan-logo">
			<span><img src="<?php echo get_template_directory_uri()?>/images/logo-sunkwan.png" valign="middle" height="40%" /></span>
		</div>
	</div>		
</div>
<div id="menu">	
	<div class="overlay hidden">
		<div class="menu-list">	
			<div>
				<a href="<?php echo site_url()?>">首页</a>				
			</div>	
			<div>
				<a>关于上坤</a>
				<ul class="submenu hidden">
					<li><a href="<?php echo site_url('about')?>">公司概况</a></li>
					<li><a href="<?php echo site_url('management')?>">管理团队</a></li>
					<li><a href="<?php echo site_url('spirit')?>">企业文化</a></li>
					<li><a href="<?php echo site_url('history')?>">发展历程</a></li>
				</ul>
			</div>
			<div>
				<a>媒体中心</a>
				<ul class="submenu hidden">
					<li><a href="<?php echo site_url('category/news')?>">新闻动态</a></li>
					<li><a href="<?php echo site_url('magazine')?>">电子内刊</a></li>
					<li><a href="<?php echo site_url('category/events')?>">最新活动</a></li>
				</ul>
			</div>
			<div>
				<a>核心业务</a>
				<ul class="submenu hidden">
					<li><a href="<?php echo site_url('real-estates')?>">地产开发</a></li>
					<li><a href="<?php echo site_url('commercial-assets')?>">商业资产管理</a></li>
					<li><a href="<?php echo site_url('fund')?>">地产基金</a></li>
				</ul>
			</div>
			<div>
				<a href="http://zhaocai.sunkwan.com.cn/">招标公告</a>
			</div>
			<div>
				<a>加入我们</a>
				<ul class="submenu hidden">
					<li><a href="<?php echo site_url('philosophy')?>">用人理念</a></li>
					<!-- <li><a href="<?php echo site_url('employees')?>">员工活动</a></li>-->
					<li><a href="http://sunkwan.zhiye.com/search">人才招聘</a></li>
					<!-- <li><a href="<?php echo site_url('recruit-graduation')?>">校园招聘</a></li> -->					
				</ul>
			</div>
			<div>
				<a href="<?php echo site_url('contact-us')?>">联系我们</a>
				</div>				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
jQuery(function($) {
	$('.menu-toggle-button').click(function() {
		if ($(this).data('toggle') == 1) {
			$(this).data('toggle', 0);		
			$('#menu .overlay').addClass('hidden');
		} else {
			$(this).data('toggle', 1);
			$('#menu .menu-list').css('left', '-250px');
			$('#menu .overlay').removeClass('hidden');
			anime({
				targets:  document.querySelector('#menu .menu-list'),
				left: '0px',
				easing: 'easeOutExpo',
				duration: 250,
			});
		}
		return false;
	});	

	$('#menu .menu-list > div > a').click(function() {
		if ($(this).attr('href') != undefined) {
			return true;
		}
		$('#menu .menu-list > div > a').removeClass('active');
		$('#menu .menu-list > div .submenu').addClass('hidden');
		$(this).addClass('active');
		$(this).parent().find('.submenu').removeClass('hidden');
	});
});
</script>
