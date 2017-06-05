<script>
window.onload=function(){
	 var hash = window.location.hash;	
	 jQuery.scrollTo(hash + '-scroll', 300);
}

window.onhashchange=function(){
	 var hash = window.location.hash;	 
	 jQuery.scrollTo(hash + '-scroll', 300);	
}
</script>
<!-- Nav -->
<div id="nav">
	<div class="header wrapper">
		<div class="sunkwan-logo">
			<span><img src="<?php echo get_template_directory_uri()?>/images/logo-sunkwan.png" valign="middle" /></span>
		</div>
		<div class="menu">
			<div>
				<a href="<?php echo site_url()?>">首页</a>				
			</div>	
			<div>
				<a href="<?php echo site_url('about')?>">关于上坤</a>
				<ul class="submenu">
					<li><a href="<?php echo site_url('about')?>/#section-intro">公司概况</a></li>
					<li><a href="<?php echo site_url('about')?>/#section-spirit">企业文化</a></li>
					<li><a href="<?php echo site_url('about')?>/#section-history">发展历程</a></li>
				</ul>
			</div>
			<div>
				<a>媒体中心</a>
				<ul class="submenu">
					<li><a href="<?php echo site_url('category/news')?>">新闻动态</a></li>
					<li><a href="<?php echo site_url('magazine')?>">电子内刊</a></li>
					<li><a href="<?php echo site_url('category/news')?>">最新活动</a></li>
				</ul>
			</div>
			<div>
				<a>核心业务</a>
				<ul class="submenu">
					<li><a href="<?php echo site_url('real-estates')?>">地产开发</a></li>
					<li><a href="<?php echo site_url('')?>">商业资产管理</a></li>
					<li><a href="<?php echo site_url('')?>">地产基金</a></li>
				</ul>
			</div>
			<div>
				<a href="<?php echo site_url('bids')?>">招标公告</a>
			</div>
			<div>
				<a href="<?php echo site_url('recruit')?>">加入我们</a>
				<ul class="submenu">
					<li><a href="<?php echo site_url('recruit')?>">用人理念</a></li>
					<li><a href="<?php echo site_url('employees')?>">员工活动</a></li>
					<li><a href="<?php echo site_url('recruit')?>/#section-recruit-social">社会招聘</a></li>
					<li><a href="<?php echo site_url('recruit')?>">校园招聘</a></li>					
				</ul>
			</div>
			<div>
				<a href="<?php echo site_url('contact-us')?>">联系我们</a>
			</div>				
		</div>
		<div class="agent-link"><span>&gt;</span>全民经纪人</div>
	</div>
</div>
