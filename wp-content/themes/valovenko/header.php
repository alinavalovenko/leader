<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="viewport" content="width=device-width">
    <meta charset="UTF-8">
    <meta name="description"
          content="<?php __( 'Создание и продвижение сайтов на заказ. Заказать сайт визитку, интернет-магазин или сайт для бизнеса. Опыт работы 10 лет. Веб студия Leader', 'valovenko' ); ?>">
    <meta name="keywords"
          content="Сайт визитка в Харькове, Интернет-магазин на заказ в Харькове, Заказать сайт в Харькове">
    <meta name="author" content="Alina Valovenko">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">
    <header id="site-header" class="header-wrap container-fluid">
        <div class="header-content container">
            <div class="row">
                <div class="logo col-xs-8 col-sm-5 col-md-4 col-lg-4 pull-left">
                    <img src="<?php echo VL_IMAGES . 'logo.png'; ?>" alt="<?php echo VL_DEFAULT_ALT; ?>"
                         class="site-logo">
                </div>
                <div class="col-xs-4 col-sm-7 col-md-8 col-lg-8 pull-right">
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
                </div>
            </div>
        </div>
    </header>
