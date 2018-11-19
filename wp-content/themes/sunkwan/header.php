<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui, user-scalable=no" />
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="上坤,上坤置业,上坤集团,上坤股份,sunkwan,www.sunkwan.com.cn" />
<meta name="author" content="" />
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<?php endif; ?>
	<?php wp_head(); ?>
	<script>
		var _hmt = _hmt || [];
		(function() {
		  var hm = document.createElement("script");
		  hm.src = "https://hm.baidu.com/hm.js?42bec918e18b6b2f9163c1bb674502ac";
		  var s = document.getElementsByTagName("script")[0];
		  s.parentNode.insertBefore(hm, s);
		})();
	</script>
</head>
<body <?php body_class(); ?>>
<?php
if (is_mobile())
{
	include 'header-mobile.php';
}
else
{
	include 'header-desktop.php';
}
?>
