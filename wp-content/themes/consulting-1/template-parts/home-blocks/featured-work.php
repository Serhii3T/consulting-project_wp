<?php $fields = get_fields(get_the_ID()) ?>
<?php $bgImg = 'http://consulting.local/wp-content/uploads/2022/02/featured-work-bg.png'?>
<!--    featured-work    -->
<section class="c-featured-work" style="background-image: url('<?php echo $bgImg;?>')">
    <div class="c-featured-work__wrapper">

        <!--    content    -->
        <div class="c-featured-work__content">

            <!--      suptitle      -->
            <?php if ($fields['suptitle_featured-work']) : ?>
                <p class="c-featured-work__suptitle">
                    <?php echo $fields['suptitle_featured-work']; ?>
                </p>
            <?php endif; ?>

            <!--      title      -->
            <?php if ($fields['title_featured-work']) : ?>
                <h2 class="c-featured-work__title"><?php echo $fields['title_featured-work']; ?></h2>
            <?php endif; ?>

            <!--      text      -->
            <?php if ($fields['text_featured-work']) : ?>
                <div class="c-featured-work__text">
                    <?php echo $fields['text_featured-work']; ?>
                </div>
            <?php endif; ?>

            <!--      btn      -->
            <?php if ($fields['btn_featured-work']) : ?>
                <a href="<?php echo $fields['btn_featured-work']['url'] ?>"
                    <?php echo $fields['btn_featured-work']['target'] ? 'target="' . $fields['btn_featured-work']['target'] . '"' : ''; ?>
                   class="c-featured-work__btn e-link">
                    <?php echo $fields['btn_featured-work']['title'] ?>
                </a>
            <?php endif; ?>

        </div>

        <!--    img    -->
        <?php if ($fields['image_featured-work']) : ?>
            <div class="c-featured-work__img">
                <img src="<?php echo $fields['image_featured-work']['url'] ?>"
                     alt="<?php echo $fields['image_featured-work']['alt'] ? $fields['image_featured-work']['alt'] : 'search' ?>"
            </div>
        <?php endif; ?>

    </div>
</section>