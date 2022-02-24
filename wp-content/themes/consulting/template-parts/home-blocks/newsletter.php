<?php $fields = get_fields(get_the_ID()) ?>
<!--    newsletter    -->
<section class="c-newsletter">
    <div class="c-newsletter__wrapper">

        <!--      title      -->
        <?php if ($fields['title_newsletter']) : ?>
            <h2 class="c-newsletter__title">
                <?php echo $fields['title_newsletter']; ?>
            </h2>
        <?php endif; ?>

        <!--      subtitle      -->
        <?php if ($fields['subtitle_newsletter']) : ?>
            <p class="c-newsletter__subtitle">
                <?php echo $fields['subtitle_newsletter']; ?>
            </p>
        <?php endif; ?>
        <!--      form submit      -->
        <form action="#" method="post" class="c-newsletter__form">
            <input type="email" name="mail" placeholder="Email address" id="input-mail" class="c-newsletter__input">
            <button type="submit" class="c-newsletter__btn">Subscribe</button>
        </form>
        <!--    message    -->
        <?php if ($fields['message_newsletter']) : ?>
            <div class="thank-message">
                <?php echo $fields['message_newsletter']; ?>
            </div>
        <?php endif; ?>


    </div>
</section>