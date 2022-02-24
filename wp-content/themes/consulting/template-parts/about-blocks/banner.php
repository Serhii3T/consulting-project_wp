<?php $fields = get_fields(get_the_ID()) ?>
<!--    banner      -->
<div class="c-about-banner">

    <!--      circles      -->
    <?php for ($i = 1; $i <= 4; $i++) :?>
        <div class="c-about-banner__circle c-about-banner__circle--<?php echo $i; ?>"></div>
    <?php endfor; ?>

    <!--      wrapper      -->
    <div class="c-about-banner__wrapper envelope">

        <!--      content        -->
        <div class="c-about-banner__content">
            <!--      breadcrumbs        -->
            <div class="c-about-banner__breadcrumbs">
                <ul class="c-breadcrumbs">
                    <?php
                        if ( function_exists('yoast_breadcrumb') ) {
                            yoast_breadcrumb( '<p id=“breadcrumbs”>','</p>' );
                        }
                    ?>
                </ul>
            </div>
            <!--      title        -->
            <?php if ($fields['title_about']) : ?>
                <h1 class="c-about-banner__title"><?php echo $fields['title_about']; ?></h1>
            <?php endif; ?>
        </div>

        <!--      img        -->
        <?php if ($fields['image_about']) : ?>
            <div class="c-about-banner__img">
                <img src="<?php echo $fields['image_about']['url'] ?>"
                     alt="<?php echo $fields['image_about']['alt'] ? $fields['image_about']['alt'] : 'girl' ?>"
                     class="c-about-banner__picture">
            </div>
        <?php endif; ?>

    </div>
</div>
