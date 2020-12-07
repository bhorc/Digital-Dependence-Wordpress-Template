<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DigitalDependence
 */

?>

		<footer class="footer">
            <div class="wrapper">
                <a href="#" class="footer__logo">
                    <span class="footer__image logo"></span>
                    <span class="footer__siteName"><?php bloginfo( 'name' ); ?></span>
                </a>
                <div class="footer__menu">
                    <ul class="footer__list">
                        <li class="footer__item">
                            <h4 class="footer__title">Цифровий детокс</h4>
                        </li>
                        <li class="footer__item"><a href="#" class="footer__link">Проблеми цифрової залежності</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Проблеми зі здоров’ям</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Залежність від онлайну</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Як боротися</a></li>
                    </ul>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <h4 class="footer__title">Цифрова залежність</h4>
                        </li>
                        <li class="footer__item"><a href="#" class="footer__link">Типові ознаки</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Тест на залежність</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Дослідження</a></li>
                    </ul>
                    <ul class="footer__list">
                        <li class="footer__item">
                            <h4 class="footer__title">Рівні залежності</h4>
                        </li>
                        <li class="footer__item"><a href="#" class="footer__link">Рівень цифрової залежності ШКМ</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Рівень цифрової залежності ІФ</a></li>
                        <li class="footer__item"><a href="#" class="footer__link">Рівень цифрової залежності в мене</a></li>
                    </ul>
                </div>
                <div class="footer__bottom">
                    <p class="footer__copy">© ПП “ІНФОЛОГОС”, 2007 - 2020</p>
                    <div class="footer__socials">
                        <a href="#" class="footer__social"><span class="footer__icon telegram"></span></a>
                        <a href="#" class="footer__social"><span class="footer__icon twitter"></span></a>
                        <a href="#" class="footer__social"><span class="footer__icon facebook"></span></a>
                        <a href="#" class="footer__social"><span class="footer__icon instagram"></span></a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<?php wp_footer(); ?>
</body>
</html>