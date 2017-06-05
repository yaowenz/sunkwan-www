<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui" />
	<meta name="format-detection" content="telephone=no"/>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<script>
	
	
	</script>
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
