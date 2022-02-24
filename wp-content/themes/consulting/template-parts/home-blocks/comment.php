<?php $fields = get_fields(get_the_ID()) ?>
<!--    comment    -->
<section class="c-comment">

    <!--    circles      -->
    <?php
        $i = 1;
    if ($fields['images_comment'] && !empty($fields['images_comment'])) : ?>
        <?php foreach ($fields['images_comment'] as $item) : ?>
            <?php if ($item) : ?>
                <div class="c-comment__circle c-comment__circle--<?php echo $i; echo $i==1 ? ' active' : ''; ?>"
                     data-id="<?php echo $i;?>">
                    <img src="<?php echo $item['image']['url'] ?>"
                         alt="<?php echo $item['image']['alt'] ? $item['image']['alt'] : 'men' ?>">
                </div>
            <?php endif; ?>
        <?php
        $i++;
        endforeach; ?>
    <?php endif; ?>

    <div class="c-comment__wrapper">

        <?php
            $i = 1;
        if ($fields['items_comment'] && !empty($fields['items_comment'])) : ?>
            <?php foreach ($fields['items_comment'] as $item) : ?>
                <div class="c-comment__item data-id-<?php echo $i; echo $i==1 ? ' active' : ''; ?>">

                    <!--      quote      -->
                    <?php if ($item['quote']) : ?>
                        <div class="c-comment__quote">
                            <?php echo $item['quote']; ?>
                        </div>
                    <?php endif; ?>

                    <!--      author      -->
                    <div class="c-comment__author">
                        <?php if ($item['link']) : ?>
                            <a href="<?php echo $item['link']['url'] ?>"
                               rel="author"
                                <?php echo $item['link']['target'] ? 'target="' . $item['link']['target'] . '"' : ''; ?>
                               class="c-comment__author--bold">
                                <?php echo $item['link']['title'] ?>
                            </a>
                        <?php endif; ?>

                        <?php if ($item['text']) : ?>
                            <div class="c-comment__author--gray">
                                <?php echo $item['text']; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                </div>
            <?php
                $i++;
            endforeach; ?>
        <?php endif; ?>

        <!--      img      -->
        <?php if ($fields['image_comment']) : ?>
            <div class="c-comment__img">
                <img src="<?php echo $fields['image_comment']['url'] ?>"
                     alt="<?php echo $fields['image_comment']['alt'] ? $fields['image_comment']['alt'] : 'girl' ?>">
            </div>
        <?php endif; ?>

    </div>
</section>