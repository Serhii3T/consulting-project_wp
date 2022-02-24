<?php $fields = get_fields(get_the_ID()) ?>
<!--    firm      -->
<section class="c-firm">
    <div class="c-firm__wrapper envelope">

        <!--      title        -->
        <?php if ($fields['title_firm']) : ?>
            <h2 class="c-firm__title"><?php echo $fields['title_firm']; ?></h2>
        <?php endif; ?>

        <!--      content        -->
        <div class="c-firm__content">
            <!--        text        -->
            <?php if ($fields['text_firm']) : ?>
                <div class="c-firm__text">
                    <?php echo $fields['text_firm']; ?>
                </div>
            <?php endif; ?>
            <!--      logo          -->
            <div class="c-firm__firm-logo">
                <?php if ($fields['article_firm']) : ?>
                    <p class="c-firm__firm">
                        <?php echo $fields['article_firm']; ?>
                    </p>
                <?php endif; ?>
                <?php if ($fields['brands_firm'] && !empty($fields['brands_firm'])) : ?>
                    <div class="c-firm__logo">
                        <?php foreach ($fields['brands_firm'] as $item) : ?>
                            <?php if ($item['link']) : ?>
                                <a href="<?php echo $item['link']['url'] ?>"
                                    <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                                   class="c-firm__link">
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
