<?php $fields = get_fields(get_the_ID()) ?>
<!--    our-mission    -->
<section class="c-our-mission">
    <div class="c-our-mission__wrapper">

        <!--      article      -->
        <div class="c-our-mission__article">

            <!--    suptitle    -->
            <?php if ($fields['sup_title_slider']) : ?>
                <p class="c-our-mission__suptitle">
                    <?php echo $fields['sup_title_slider']; ?>
                </p>
            <?php endif; ?>

            <!--    title   -->
            <?php if ($fields['title_slider']) : ?>
                <div class="c-our-mission__title"><?php echo $fields['title_slider']; ?></div>
            <?php endif; ?>
        </div>

        <!--      slider      -->
        <div class="c-our-mission__slider">
            <div class="swiper our-mission-swiper">
                <div class="swiper-wrapper">

                    <!--    slider item   -->
                    <?php if ($fields['slider_items'] && !empty($fields['slider_items'])) : ?>

                        <?php foreach ($fields['slider_items'] as $item) : ?>
                            <div class="swiper-slide">
                                <div class="c-cart">
                                    <div class="c-cart__wrapper">

                                        <!--  img  -->
                                        <?php if ($item['image']) : ?>
                                            <div class="c-cart__img">
                                                <img src="<?php echo $item['image']['url'] ?>"
                                                     alt="<?php echo $item['image']['alt'] ? $item['image']['alt'] : 'money' ?>">
                                            </div>
                                        <?php endif; ?>

                                        <!--  title  -->
                                        <?php if ($item['title']) : ?>
                                            <h6 class="c-cart__title"><?php echo $item['title']; ?></h6>
                                        <?php endif; ?>

                                        <!--  subtitle  -->
                                        <?php if ($item['text']) : ?>
                                            <div class="c-cart__subtitle">
                                                <?php echo $item['text']; ?>
                                            </div>
                                        <?php endif; ?>

                                        <!--  btn  -->
                                        <?php if ($item['link'] && !empty($item['link'])) : ?>
                                            <div class="c-cart__wrap-btn">
                                                <?php if ($item['link']) : ?>
                                                    <a href="<?php echo $item['link']['url'] ?>"
                                                        <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                                                        class="c-cart__btn e-link">
                                                        <?php if ($item['link']['title']) : ?>
                                                            <?php echo $item['link']['title']; ?>
                                                        <?php endif; ?>
                                                    </a>
                                                <?php endif; ?>
                                            </div>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>

    </div>
</section>
