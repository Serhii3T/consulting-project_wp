<?php $fields = get_fields(get_the_ID()) ?>
<?php $services = $fields['strategy_services']; ?>
<!--    services    -->
<section class="c-services">

    <!--      circle        -->
    <?php for ($i = 1; $i <= 4; $i++) :?>
        <div class="c-services__circle c-services__circle--<?php echo $i; ?>"></div>
    <?php endfor; ?>

    <div class="c-services__wrapper">

        <!--      description      -->
        <div class="c-services__description">

            <!--      block content        -->
<!--            --><?php
//            $i = 1;
//            $extraClass = [
//                'all',
//                'finace',
//            ];
//            if ($fields['strategy_services'] && !empty($fields['strategy_services'])) : ?>
<!--                <div class="c-services-content">-->
<!--                    --><?php //foreach ($fields['strategy_services'] as $item) : ?>
<!--                        <!--        icon        -->
<!--                        <div class="c-services-content__icon">-->
<!--                            --><?php //if ($item['icon']) : ?>
<!--                                --><?php //echo $item['icon']; ?>
<!--                            --><?php //endif; ?>
<!--                        </div>-->
<!--                        <!--        decription        -->
<!--                        <div class="c-services-content__article">-->
<!--                            <!--      title      -->
<!--                            --><?php //if ($item['title']) : ?>
<!--                                <p class="c-services-content__title">--><?php //echo $item['title']; ?><!--</p>-->
<!--                            --><?php //endif; ?>
<!--                            <!--      subtitle      -->
<!--                            --><?php //if ($item['text']) : ?>
<!--                                <div class="c-services-content__text">-->
<!--                                    --><?php //echo $item['text']; ?>
<!--                                </div>-->
<!--                            --><?php //endif; ?>
<!--                        </div>-->
<!--                    --><?php
//                        $i++;
//                    endforeach; ?>
<!--                </div>-->
<!--            --><?php //endif; ?>



            <div class="c-services-content">
                <!--        icon        -->
                <div class="c-services-content__icon">
                    <?php if ($services[0]['icon']) : ?>
                        <?php echo $services[0]['icon']; ?>
                    <?php endif; ?>
                </div>
                <!--        decription        -->
                <div class="c-services-content__article">
                    <!--      title      -->
                    <?php if ($services[0]['title']) : ?>
                        <p class="c-services-content__title"><?php echo $services[0]['title']; ?></p>
                    <?php endif; ?>
                    <!--      subtitle      -->
                    <?php if ($services[0]['text']) : ?>
                        <div class="c-services-content__text">
                            <?php echo $services[0]['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!--      block content        -->
            <div class="c-services-content c-services-content--position">
                <!--        icon        -->
                <div class="c-services-content__icon c-services-content__icon--albescent">
                    <?php if ($services[1]['icon']) : ?>
                        <?php echo $services[1]['icon']; ?>
                    <?php endif; ?>
                </div>
                <!--        decription        -->
                <div class="c-services-content__article">
                    <!--      title      -->
                    <?php if ($services[1]['title']) : ?>
                        <p class="c-services-content__title"><?php echo $services[1]['title']; ?></p>
                    <?php endif; ?>
                    <!--      subtitle      -->
                    <?php if ($services[1]['text']) : ?>
                        <div class="c-services-content__text">
                            <?php echo $services[1]['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!--      block content        -->
            <div class="c-services-content">
                <div class="c-services-content__icon c-services-content__icon--blue-chalk">
                    <?php if ($services[2]['icon']) : ?>
                        <?php echo $services[2]['icon']; ?>
                    <?php endif; ?>
                </div>
                <!--        decription        -->
                <div class="c-services-content__article">
                    <!--      title      -->
                    <?php if ($services[2]['title']) : ?>
                        <p class="c-services-content__title"><?php echo $services[2]['title']; ?></p>
                    <?php endif; ?>
                    <!--      subtitle      -->
                    <?php if ($services[2]['text']) : ?>
                        <div class="c-services-content__text">
                            <?php echo $services[2]['text']; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

        </div>

        <!--      curve-drawing      -->
        <?php if ($fields['image_services']) : ?>
            <div class="c-services__curve-drawing">
                <img src="<?php echo $fields['image_services']['url'] ?>"
                     alt="<?php echo $fields['image_services']['alt'] ? $fields['image_services']['alt'] : 'curve' ?>"
                     class="c-services__curve-drawing--vertical">
                <img src="<?php echo $fields['image_services_2']['url'] ?>"
                     alt="<?php echo $fields['image_services_2']['alt'] ? $fields['image_services_2']['alt'] : 'curve' ?>"
                     class="c-services__curve-drawing--horizontal">
            </div>
        <?php endif; ?>

        <!--      service      -->
        <div class="c-services__service">

            <!--      suptitle      -->
            <?php if ($fields['suptitle_services']) : ?>
                <p class="c-services__suptitle">
                    <?php echo $fields['suptitle_services']; ?>
                </p>
            <?php endif; ?>

            <!--      title      -->
            <?php if ($fields['title_services']) : ?>
                <h2 class="c-services__title">
                    <?php echo $fields['title_services']; ?>
                </h2>
            <?php endif; ?>

            <!--      text      -->
            <?php if ($fields['text_services']) : ?>
                <div class="c-services__text">
                    <?php echo $fields['text_services']; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>
