<?php $fields = get_fields(get_the_ID()) ?>
<!--    clients      -->
<section class="c-clients">
    <div class="c-clients__wrapper envelope">

        <!--      suptitle        -->
        <?php if ($fields['suptitle_clients']) : ?>
            <p class="c-clients__suptitle">
                <?php echo $fields['suptitle_clients']; ?>
            </p>
        <?php endif; ?>
        <!--      title        -->
        <?php if ($fields['title_clients']) : ?>
            <div class="c-clients__title"><?php echo $fields['title_clients']; ?></div>
        <?php endif; ?>
        <!--      brands        -->
        <?php if ($fields['brands_clients'] && !empty($fields['brands_clients'])) : ?>
            <div class="c-clients__brands">
                <?php foreach ($fields['brands_clients'] as $item) : ?>
                    <?php if ($item['link']) : ?>
                        <a href="<?php echo $item['link']['url'] ?>"
                            <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                           class="c-clients__logo">
                            <?php if ($item['icon']) : ?>
                                <?php echo $item['icon']; ?>
                            <?php endif; ?>
                        </a>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <!--      curve        -->
        <?php if ($fields['image_clients']) : ?>
            <div class="c-clients__curve">
                <img src="<?php echo $fields['image_clients']['url'] ?>"
                     alt="<?php echo $fields['image_clients']['alt'] ? $fields['image_clients']['alt'] : 'curve' ?>">
            </div>
        <?php endif; ?>

        <!--      get started        -->
        <div class="c-clients__start">
            <?php if ($fields['title_2_clients']) : ?>
                <h2 class="c-clients__article">
                    <?php echo $fields['title_2_clients']; ?>
                </h2>
            <?php endif; ?>
            <?php if ($fields['subtitle_clients']) : ?>
                <p class="c-clients__text">
                    <?php echo $fields['subtitle_clients']; ?>
                </p>
            <?php endif; ?>

            <div class="c-clients__btn">
                <?php if ($fields['link_1_clients']) : ?>
                    <a href="<?php echo $fields['link_1_clients']['url'] ?>"
                        <?php echo $fields['link_1_clients']['target'] ? 'target="' . $fields['link_1_clients']['target'] . '"' : ''; ?>
                       class="c-clients__link c-clients__link--daisy">
                        <?php echo $fields['link_1_clients']['title'] ?>
                    </a>
                <?php endif; ?>
                <?php if ($fields['link_2_clients']) : ?>
                    <a href="<?php echo $fields['link_2_clients']['url'] ?>"
                        <?php echo $fields['link_2_clients']['target'] ? 'target="' . $fields['link_2_clients']['target'] . '"' : ''; ?>
                       class="c-clients__link c-clients__link--peppermint">
                        <?php echo $fields['link_2_clients']['title'] ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    </div>
</section>