<?php $fields = get_fields(get_the_ID()) ?>
<!--    comment    -->
<section class="c-comment">
    <?php
    $i = 1;
    if ($fields['images_comment'] && !empty($fields['images_comment'])) : ?>
        <?php foreach ($fields['images_comment'] as $item) : ?>
            <?php if ($item) : ?>
                <div class="c-comment__circle test-<?php echo $i;?>"
                     data-id="<?php echo $i;?>">
                    <img src="<?php echo $item['image']['url'] ?>"
                         alt="<?php echo $item['image']['alt'] ? $item['image']['alt'] : 'men' ?>">
                </div>
            <?php endif; ?>
        <?php
        $i++;
        endforeach; ?>
    <?php endif; ?>

    <!--    circles      -->

    <div class="c-comment__wrapper">

        <div class="c-comment__item data-id-1 active">
            <!--      quote      -->
            <q class="c-comment__quote">
                Hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony Nguyen</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-2">
            <!--      quote      -->
            <q class="c-comment__quote">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony Nguye</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-3">
            <!--      quote      -->
            <q class="c-comment__quote">
                Sit amet, consectetur adipiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony Nguy</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-4">
            <!--      quote      -->
            <q class="c-comment__quote">
                Consectetur adipiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony Ngu</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-5">
            <!--      quote      -->
            <q class="c-comment__quote">
                Consectetur adipiscing elit. Hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony YenNgu</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-6">
            <!--      quote      -->
            <q class="c-comment__quote">
                Loaosdodogoiscing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony uyeNgn</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-7">
            <!--      quote      -->
            <q class="c-comment__quote">
                loreegk kfkfi glo ing elit. Aliquam tate, tortor nec commodo ultricies vitae viverra urna.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Tony yeNgun</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <div class="c-comment__item data-id-8">
            <!--      quote      -->
            <q class="c-comment__quote">
                Aliquam tate, tortor nec commodo ultricies vitae viverra urna. Hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            </q>
            <!--      author      -->
            <div class="c-comment__author">
                <a rel="author" target="_blank" href="https://www.linkedin.com/in/tiennd/?originalSubdomain=vn" class="c-comment__author--bold">Toy Nguy</a>
                <span class="c-comment__author--gray"> - Ceo Moontheme</span>
            </div>
        </div>

        <!--      img      -->

        <?php if ($fields['image_comment']) : ?>
            <div class="c-comment__img">
                <img src="<?php echo $fields['image_comment']['url'] ?>"
                     alt="<?php echo $fields['image_comment']['alt'] ? $fields['image_comment']['alt'] : 'girl' ?>">
            </div>
        <?php endif; ?>

    </div>
</section>