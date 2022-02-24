<?php $fields = get_fields(get_the_ID()) ?>
<!--    forward      -->
<section class="c-forward">

    <!--      circles      -->
    <?php for ($i = 1; $i <= 4; $i++) :?>
        <div class="c-forward__circle c-forward__circle--<?php echo $i; ?>"></div>
    <?php endfor; ?>

    <div class="c-forward__wrapper envelope">

        <!--      block        -->
        <div class="c-forward__block">

            <!--        img        -->
            <?php if ($fields['image_forward']) : ?>
                <div class="c-forward__img">
                    <img src="<?php echo $fields['image_forward']['url'] ?>"
                         alt="<?php echo $fields['image_forward']['alt'] ? $fields['image_forward']['alt'] : 'boy-money' ?>"
                         class="c-forward__picture">
                </div>
            <?php endif; ?>

            <!--    content    -->
            <div class="c-forward__content">
                <!--          title        -->
                <?php if ($fields['title_forward']) : ?>
                    <h2 class="c-forward__title"><?php echo $fields['title_forward']; ?></h2>
                <?php endif; ?>
                <!--          text          -->
                <?php if ($fields['text_forward']) : ?>
                    <div class="c-forward__text">
                        <?php echo $fields['text_forward']; ?>
                    </div>
                <?php endif; ?>
                <!--          btn          -->
                <?php if ($fields['link_forward']) : ?>
                    <a href="<?php echo $fields['link_forward']['url'] ?>"
                        <?php echo $fields['link_forward']['target'] ? 'target="' . $fields['link_forward']['target'] . '"' : ''; ?>
                       class="c-forward__btn">
                        <?php echo $fields['link_forward']['title'] ?>
                    </a>
                <?php endif; ?>
            </div>

        </div>

        <!--      curve          -->
        <?php if ($fields['img_curve_forward']) : ?>
            <div class="c-forward__curve">
                <img src="<?php echo $fields['img_curve_forward']['url'] ?>"
                     alt="<?php echo $fields['img_curve_forward']['alt'] ? $fields['img_curve_forward']['alt'] : 'boy-money' ?>">
            </div>
        <?php endif; ?>

        <!--        counts        -->
        <?php if ($fields['counts_forward'] && !empty($fields['counts_forward'])) : ?>
            <div class="c-forward__counts">
                <?php foreach ($fields['counts_forward'] as $item) : ?>
                    <div class="c-forward__position">
                        <?php if ($item['count']) : ?>
                            <div class="c-forward__number" <?php echo $item['background_color'] ? 'style="background-color:'.$item['background_color'].';"' : '' ; ?>>
                                <?php echo $item['count']; ?>
                            </div>
                        <?php endif; ?>
                        <?php if ($item['name']) : ?>
                            <div class="c-forward__designation">
                                <?php echo $item['name']; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>
</section>