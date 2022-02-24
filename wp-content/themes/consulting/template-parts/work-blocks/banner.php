<?php $fields = get_fields(get_the_ID()) ?>
<!--        banner      -->
<section class="c-work">
    <div class="c-work__wrapper envelope">

        <!--      breadcrumbs        -->
        <div class="c-work__breadcrumbs">
            <ul class="c-breadcrumbs">
                <?php if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<p id=“breadcrumbs”>','</p>' ); }
                ?>
            </ul>
        </div>

        <!--      tab        -->
        <div class="c-work__tab">
            <!--        title        -->
            <?php if ($fields['title_work']) : ?>
                <h2 class="c-work__title">
                    <?php echo $fields['title_work']; ?>
                </h2>
            <?php endif; ?>
            <!--        tab's menu        -->
            <div class="c-work__menu">
                <?php
                $i = 0;
                if ($fields['category_work'] && !empty($fields['category_work'])) : ?>
                    <ul class="c-work__nav">
                        <li class="c-work__item" data-cat="all">All</li>
                        <?php foreach ($fields['category_work'] as $item) : ?>
                            <li class="c-work__item <?php echo $i==0 ? ' active' : ''; ?>"
                                data-cat="<?php echo clean(strtolower($item['text']) ); ?>">
                                <?php echo $item['text'] ?>
                            </li>
                        <?php
                            $i++;
                        endforeach; ?>
                    </ul>
                <?php endif; ?>
            </div>

        </div>

    </div>
</section>