<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no" />
	<meta name="format-detection" content="telephone=no"/>
	<meta name="keywords" content="上坤,上坤集团,上坤股份,sunkwan,www.sunkwan.com.cn" />
	<meta name="description" content="上海上坤置业有限公司，系深圳盈信投资集团下属的专业从事中国境内商业地产、住宅地产开发及文化创意产业经营的合资企业。  公司自成立以来快速发展，已战略布局上海宝山区，同时依托强有力的资金运作实力，立足上海、辐射长三角，努力整合资源，拓展价值土地，提高资产周转率，准确高效地进行项目开发。上坤置业在实践中探索，积极拓展多元化企业发展之路，先后投资创建了多家子公司，业务涉及房产开发（包括住宅、商业、LOFT等）、物业管理、艺术馆、餐饮经营等众多领域。" />
	<meta name="author" content="" />
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
	if(is_mobile()) {
		include 'header-mobile.php';
	}
	else {
		include 'header-desktop.php';
	}
?>
