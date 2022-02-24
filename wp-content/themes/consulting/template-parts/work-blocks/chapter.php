<?php
$fields = get_fields(get_the_ID());

?>
<!--    content      -->
<section class="c-chapter">
    <div class="c-chapter__wrapper">

        <div class="c-chapter__part active">
            
            <?php foreach ($fields['category_work'] as $item) : ?>
                <?php foreach ($item['blocks'] as $item_blocks) : ?>
                    <div class="c-chapter__block all <?php echo clean(strtolower($item['text']) ); ?> active"
                        <?php $bgImgWork = $item_blocks['background_image']['url']?>
                        <?php echo $item_blocks['background_color']
                            ? 'style="background-color:'.$item_blocks['background_color'].'; background-image: url("'.$bgImgWork.'");"'
                            : '' ; ?>
                    >
<!--                        <img class="c-chapter__block--bg" src="--><?php //echo $bgImgWork; ?><!--" alt=work">-->
                        <div class="c-chapter__wrapper envelope">
                            <!--          content          -->
                            <div class="c-featured-work__content">
                                <?php if ($item_blocks['suptitle']) : ?>
                                    <p class="c-featured-work__suptitle"><?php echo $item_blocks['suptitle']; ?></p>
                                <?php endif; ?>
                                <?php if ($item_blocks['text']) : ?>
                                    <div class="c-featured-work__text">
                                        <?php echo $item_blocks['text']; ?>
                                    </div>
                                <?php endif; ?>

                                <?php if ($item_blocks['link']) : ?>
                                    <a href="<?php echo $item_blocks['link']['url'] ?>"
                                        <?php echo $item_blocks['link']['target'] ? 'target="' . $item_blocks['link']['target'] . '"' : ''; ?>
                                       class="c-featured-work__btn e-link">
                                        <?php echo $item_blocks['link']['title'] ?>
                                    </a>
                                <?php endif; ?>
                            </div>

                            <!--          img          -->
                            <?php if ($item_blocks['background_img_res']) : ?>
                                <img src="<?php echo $item_blocks['background_img_res']['url'] ?>"
                                     alt="<?php echo $item_blocks['background_img_res']['alt'] ?>" class="c-chapter__img">
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>

            <?php if ($fields['link_work']) : ?>
                <button href="<?php echo $fields['link_work']['url'] ?>"
                    <?php echo $fields['link_work']['target'] ? 'target="' . $fields['link_work']['target'] . '"' : ''; ?>
                   class="c-chapter__btn">
                    <?php echo $fields['link_work']['title'] ?>
                </button>
            <?php endif; ?>

        </div>


    </div>
</section>