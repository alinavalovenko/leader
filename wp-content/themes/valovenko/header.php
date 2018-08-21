<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="description"
          content="<?php __( 'Создание и продвижение сайтов на заказ. Заказать сайт визитку, интернет-магазин или сайт для бизнеса. Опыт работы 10 лет. Веб студия Leader', 'valovenko' ); ?>">
    <meta name="keywords"
          content="Сайт визитка в Харькове, Интернет-магазин на заказ в Харькове, Заказать сайт в Харькове">
    <meta name="author" content="Alina Valovenko">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header id="site-header">
    Header of Site
</header>
<?php echo wp_nav_menu( array (
	'theme_location'  => 'primary-menu',
	'menu'            => '',
	'container'       => 'nav',
	'container_class' => 'vl-primary-navigation',
	'container_id'    => 'vl-primary-navigation',
	'menu_class'      => 'header-menu',
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'wp_page_menu',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
	'depth'           => 0,
	'walker'          => '',
) ); ?>