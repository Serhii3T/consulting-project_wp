<?php
get_header();
?>
    <main class="c-main">
        <!--    page home    -->
        <div class="c-page-home">
           <?php get_template_part('template-parts/home-blocks/banner') ?>
           <?php get_template_part('template-parts/home-blocks/about') ?>
           <?php get_template_part('template-parts/home-blocks/mission') ?>
           <?php get_template_part('template-parts/home-blocks/featured-work') ?>
           <?php get_template_part('template-parts/home-blocks/services') ?>
           <?php get_template_part('template-parts/home-blocks/comment') ?>
           <?php get_template_part('template-parts/home-blocks/newsletter') ?>
        </div>

    </main>
<?php
get_footer();
