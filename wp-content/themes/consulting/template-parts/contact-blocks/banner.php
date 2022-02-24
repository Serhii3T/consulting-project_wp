<?php $fields = get_fields(get_the_ID()) ?>
<!--        contact        -->
<section class="c-contact">

    <!--      circles      -->
    <?php for ($i = 1; $i <= 5; $i++) :?>
        <div class="c-contact__circle c-contact__circle--<?php echo $i; ?>"></div>
    <?php endfor; ?>

    <div class="c-contact__wrapper envelope">

        <!--      content        -->
        <div class="c-contact__content">
            <!--      breadcrumbs        -->
            <div class="c-contact__breadcrumbs">
                <ul class="c-breadcrumbs">
                    <?php
                    if ( function_exists('yoast_breadcrumb') ) {
                        yoast_breadcrumb( '<p id=“breadcrumbs”>','</p>' );
                    }
                    ?>
                </ul>
            </div>
            <!--      title        -->
            <?php if ($fields['title_contact']) : ?>
                <h1 class="c-contact__title"><?php echo $fields['title_contact']; ?></h1>
            <?php endif; ?>

            <!--    relations     -->
            <div class="c-contact__relations">

                <div class="c-footer__connect">
                    <!--          email          -->
                    <?php if ($fields['email__contact']) : ?>
                        <a href="<?php echo $fields['email__contact']['url'] ?>"
                            <?php echo $fields['email__contact']['target'] ? 'target="' . $fields['email__contact']['target'] . '"' : ''; ?>
                           class="c-footer__mail">
                            <?php echo $fields['email__contact']['title'] ?>
                        </a>
                    <?php endif; ?>
                    <!--          address          -->
                    <?php if ($fields['address_contact']) : ?>
                        <div class="c-footer__address">
                            <?php echo $fields['address_contact']; ?>
                        </div>
                    <?php endif; ?>
                    <!--          phone          -->
                    <?php if ($fields['phone__contact']) : ?>
                        <a href="<?php echo $fields['phone__contact']['url'] ?>"
                            <?php echo $fields['phone__contact']['target'] ? 'target="' . $fields['phone__contact']['target'] . '"' : ''; ?>
                           class="c-footer__tel">
                            <?php echo $fields['phone__contact']['title'] ?>
                        </a>
                    <?php endif; ?>

                </div>

            </div>

        </div>

        <!--      img        -->
        <?php if ($fields['image__contact']) : ?>
            <div class="c-contact__img">
                <img src="<?php echo $fields['image__contact']['url'] ?>"
                     alt="<?php echo $fields['image__contact']['alt'] ? $fields['image__contact']['alt'] : 'girl' ?>"
                     class="c-contact__picture">
            </div>
        <?php endif; ?>

    </div>
</section>