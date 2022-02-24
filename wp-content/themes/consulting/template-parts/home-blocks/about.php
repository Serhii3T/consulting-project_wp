<!--    about   -->
<?php $fields = get_fields(get_the_ID()) ?>
<section class="c-about">
    <div class="c-about__wrapper">

        <!--      picture      -->
        <?php if ($fields['image_about']) : ?>
            <div class="c-about__img">
                <img src="<?php echo $fields['image_about']['url'] ?>"
                     alt="<?php echo $fields['image_about']['alt'] ? $fields['image_about']['alt'] : 'girl' ?>">
            </div>
        <?php endif; ?>

        <!--      info      -->
        <div class="c-about__info">

            <!--      suptitle        -->
            <?php if ($fields['sup_title']) : ?>
                <p class="c-about__suptitle">
                    <?php echo $fields['sup_title']; ?>
                </p>
            <?php endif; ?>

            <!--      title        -->
            <?php if ($fields['title_about']) : ?>
                <h2 class="c-about__title">
                    <?php echo $fields['title_about']; ?>
                </h2>
            <?php endif; ?>

            <!--      text info       -->
            <?php if ($fields['text_about']) : ?>
                <div class="c-about__text">
                    <?php echo $fields['text_about']; ?>
                </div>
            <?php endif; ?>


            <!--      brands        -->
            <div class="c-about__firm-logo">

                <!--       brands text         -->
                <?php if ($fields['title_name_brands']) : ?>
                    <p class="c-about__firm">
                        <?php echo $fields['title_name_brands']; ?>
                    </p>
                <?php endif; ?>

                <!--    brands logo   -->
                <?php if ($fields['links_brands'] && !empty($fields['links_brands'])) : ?>
                    <div class="c-about__logo">
                        <?php foreach ($fields['links_brands'] as $item) : ?>
                            <?php if ($item['link']) : ?>
                                <a href="<?php echo $item['link']['url'] ?>"
                                    <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                                   class="c-about__link">
                                    <?php if ($item['icon']) : ?>
                                        <?php echo $item['icon']; ?>
                                    <?php endif; ?>
                                </a>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>

</section>