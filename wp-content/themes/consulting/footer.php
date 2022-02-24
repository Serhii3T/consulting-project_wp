<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Consulting
 */
?>
    <footer class="c-footer">
        <div class="c-footer__wrapper">

            <!--    logo      -->
            <div class="c-footer__copyr">
                <!--        logo link        -->
                <a href="/" class="c-footer__logo">
                    <!--          logo img          -->
                    <?php if (get_header_image()) : ?>
                        <img src="<?php echo(get_header_image()); ?>"
                             alt="<?php bloginfo('name'); ?>"/>
                    <?php else :
                        bloginfo('name');
                    endif; ?>
                </a>
                <!--        sub logo text        -->
                <?php if (get_field('sub_logo', 'option')) : ?>
                    <span class="c-footer__sublogo">
                        <?php the_field('sub_logo', 'option'); ?>
                    </span>
                <?php endif; ?>
            </div>

            <!--    navigation   -->
            <div class="c-footer__navigation">

                <!--        name nav        -->
                <?php if (get_field('name_nav', 'option')) : ?>
                    <p class="c-footer__nav">
                        <?php the_field('name_nav', 'option'); ?>
                    </p>
                <?php endif; ?>

                <!--        nav        -->
                <nav class="c-navigation">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container' => false,
                        'menu_class' => 'c-navigation__list c-footer__list',
                    )) ?>
                </nav>
            </div>

            <!--    contact      -->
            <div class="c-footer__connect">

                <!--        name contact        -->
                <?php if (get_field('name_contact', 'option')) : ?>
                    <p class="c-footer__nav">
                        <?php the_field('name_contact', 'option'); ?>
                    </p>
                <?php endif; ?>

                <!--          email          -->
                <?php
                    $mail = get_field('mail_footer', 'option');
                if ($mail) : ?>
                    <a href="<?php echo $mail['url'] ?>"
                        <?php echo $mail['target'] ? 'target="' . $mail['target'] . '"' : ''; ?>
                        class="c-footer__mail">
                        <?php echo $mail['title'] ?>
                    </a>
                <?php endif; ?>

                <!--          address          -->
                <?php if (get_field('address_footer', 'option')) : ?>
                    <div class="c-footer__address">
                        <?php the_field('address_footer', 'option'); ?>
                    </div>
                <?php endif; ?>

                <!--          phone          -->
                <?php
                    $tel = get_field('phone_footer', 'option');
                if ($tel) : ?>
                    <a href="<?php echo $tel['url'] ?>"
                        <?php echo $tel['target'] ? 'target="' . $tel['target'] . '"' : ''; ?>
                        class="c-footer__tel">
                        <?php echo $tel['title'] ?>
                    </a>
                <?php endif; ?>
            </div>

            <!--    social link      -->
            <?php
                $soc_link = get_field('social_link_footer', 'option');
            if ($soc_link && !empty($soc_link)) : ?>
                <div class="c-footer__link">
                    <?php foreach ($soc_link as $item) : ?>
                        <div class="c-footer__link-wrapper">
                            <?php if ($item['link']) : ?>
                                <a href="<?php echo $item['link']['url'] ?>"
                                    <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                                    <?php echo $item['color'] ? 'style="color:'.$item['color'].';"' : '' ; ?>
                                   class="c-footer__link-social">
                                    <?php if ($item['icon']) : ?>
                                        <?php echo $item['icon']; ?>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</div>
</body>
</html>
