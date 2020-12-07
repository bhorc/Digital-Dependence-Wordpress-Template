<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DigitalDependence
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div class="container">
        <nav class="nav">
            <div class="wrapper">
                <a href="#" class="nav__logo">
                    <span class="nav__image logo"></span>
                    <span class="nav__siteName"><?php bloginfo( 'name' ); ?></span>
                </a>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'menu-1',
						'menu_id'         => 'primary-menu',
						'menu_class'      => 'nav__menu',
						'container_class' => 'container-menu'
					)
				);
				?>

                <!-- <div class="nav__menu">
                    <a class="nav__link nav__link-active" href="#">Головна</a>
                    <a class="nav__link" href="#">Типові ознаки</a>
                    <a class="nav__link" href="#">Рівні залежності</a>
                    <a class="nav__link" href="#">Дослідження</a>
                    <a class="nav__link btn btn-test" href="#">Пройти тест</a>
                </div> -->
            </div>
        </nav>
        <header class="header">
            <div class="wrapper">
                <div class="header__content">
                    <h1 class="header__title">Цифровий детокс: <br> як виникає залежність від гаджетів та що дає їх обмеження</h1>
                    <div class="header__hr"></div>
                    <p class="header__subtitle">Як перевірити чи залежний я від гаджетів?</p>
                    <a class="header__link btn btn-test" href="#">Пройти тест</a>
                </div>
                <div class="header__image"></div>
            </div>
        </header>
