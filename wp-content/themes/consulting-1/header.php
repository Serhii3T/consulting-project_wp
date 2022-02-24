<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Consulting
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="author" content="Trytenko Serhii t3coder@gmail.com">

    <!--  bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

    <!--  fontawesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--  google map  -->
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="popup" id="popup"></div>
<div class="l-common">
<div id="page" class="site">
    <header class="c-header">
        <div class="c-header__wrapper container">
            
            <div class="c-header__nav">
                <!--        logo        -->
                <div class="c-header__logo">
                    <?php if (get_header_image()) : ?>
                        <img class="e-logo__img" src="<?php echo(get_header_image()); ?>"
                             alt="<?php bloginfo('name'); ?>"/>
                    <?php else :
                        bloginfo('name');
                    endif; ?>
                </div>

                <!--        navigation        -->
                <div class="c-header__navigation">
                    <nav class="c-navigation">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'header-menu',
                            'container' => false,
                            'menu_class' => 'c-navigation__list',
                            'menu_id' => 'menu',
                        )) ?>
                    </nav>
                </div>
            </div>

            <!--        button        -->
            <div class="c-header__btn">
                <a href="#" class="e-link">Get Start</a>
            </div>

            <!--    burger menu      -->
            <div class="c-header__burger">
                <div class="e-burger-menu" id="burger">
                    <span class="e-burger-menu__bar"></span>
                    <span class="e-burger-menu__bar"></span>
                    <span class="e-burger-menu__bar"></span>
                </div>
            </div>

        </div>
    </header>
