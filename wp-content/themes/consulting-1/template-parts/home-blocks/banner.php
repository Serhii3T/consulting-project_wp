<?php $fields = get_fields(get_the_ID()) ?>
<!--   banner   -->
<section class="c-banner">
    <div class="c-banner__wrapper container">

        <div class="c-banner__wrap">

            <!--    social link      -->
            <?php if ($fields['links_socials'] && !empty($fields['links_socials'])) : ?>
                <div class="c-banner__social-link">
                    <?php foreach ($fields['links_socials'] as $item) : ?>
                        <?php if ($item['link']) : ?>
                            <a href="<?php echo $item['link']['url'] ?>"
                                <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                                class="c-banner__link">
                                <?php if ($item['icon']) : ?>
                                    <?php echo $item['icon']; ?>
                                <?php endif; ?>
                            </a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <!--    text banner      -->
            <div class="c-banner__home">

                <!--      title      -->
                <?php if ($fields['title']) : ?>
                    <h1 class="c-banner__title"><?php echo $fields['title']; ?></h1>
                <?php endif; ?>

                <!--      subtitle      -->
                <?php if ($fields['text']) : ?>
                    <div class="c-banner__subtitle">
                        <?php echo $fields['text']; ?>
                    </div>
                <?php endif; ?>

                <!--      btns     -->
                <div class="c-banner__buttons">
                    <?php if ($fields['link_1']) : ?>
                        <a href="<?php echo $fields['link_1']['url'] ?>"
                            <?php echo $fields['link_1']['target'] ? 'target="' . $fields['link_1']['target'] . '"' : ''; ?>
                           class="c-banner__btn c-banner__btn--daisy e-link ">
                            <?php echo $fields['link_1']['title'] ?>
                        </a>
                    <?php endif; ?>
                    <?php if ($fields['link_2']) : ?>
                        <a href="<?php echo $fields['link_2']['url'] ?>"
                            <?php echo $fields['link_2']['target'] ? 'target="' . $fields['link_2']['target'] . '"' : ''; ?>
                           class="c-banner__btn c-banner__btn--peppermint e-link">
                            <?php echo $fields['link_2']['title'] ?>
                        </a>
                    <?php endif; ?>
                </div>

            </div>

        </div>

        <!--    img bg      -->
        <?php if ($fields['banner_image']) : ?>
            <div class="c-banner__img">
                <img src="<?php echo $fields['banner_image']['url'] ?>"
                     alt="<?php echo $fields['banner_image']['alt'] ? $fields['banner_image']['alt'] : 'banner' ?>"
                     class="c-banner__picture">
            </div>
        <?php endif; ?>

    </div>
</section>