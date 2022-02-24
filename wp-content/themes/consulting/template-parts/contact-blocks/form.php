<?php $fields = get_fields(get_the_ID()) ?>
<!--        form        -->
<section class="c-form">
    <div class="c-from__wrapper envelope">

        <!--    title    -->
        <?php if ($fields['title_form']) : ?>
            <h2 class="c-form__title"><?php echo $fields['title_form']; ?></h2>
        <?php endif; ?>

        <!--    subtitle    -->
        <?php if ($fields['subtitle_form']) : ?>
            <div class="c-form__subtitle">
                <?php echo $fields['subtitle_form']; ?>
            </div>
        <?php endif; ?>

        <!--    form contact    -->
        <?php the_field('contact_form'); ?>

        <div class="thank-message">
            <span>Thanks! The form has been sent!!!</span>
        </div>
    </div>
</section>