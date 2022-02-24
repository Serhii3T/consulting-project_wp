<?php
/* Template Name: About template */
get_header();
?>
    <main class="c-main">
        <!--    page about    -->
        <div class="c-page-about">
            <?php get_template_part('./template-parts/about-blocks/banner') ?>
            <?php get_template_part('./template-parts/about-blocks/firm') ?>
            <?php get_template_part('./template-parts/about-blocks/forward') ?>
            <?php get_template_part('./template-parts/about-blocks/clients') ?>
        </div>

    </main>
<?php
get_footer();