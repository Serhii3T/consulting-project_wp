<?php
    $arrdown = 'http://consulting.local/wp-content/uploads/2022/02/arrdown.png';
    $fields = get_fields(get_the_ID());
?>

<section class="c-map">
    <div class="c-map__wrapper">

        <!--    select    -->
        <div class="c-map__control" id="style-selector-control">
            <?php if ($fields['styles_select']) : ?>
                <select name="map" id="style-selector" class="c-map__select"
                        style="background-image: url('<?php echo $arrdown ? $arrdown : '' ;?>')"
                >
                    <?php foreach ($fields['styles_select'] as $item) : ?>
                            <option value="<?php echo $item['value']; ?>"
                                <?php echo ($item['value'] == 'default') ? 'selected="selected"' : '' ;?>
                            >
                                <?php echo $item['label']; ?>
                            </option>
                    <?php endforeach; ?>
                </select>
            <?php endif; ?>
        </div>

        <!--    google map    -->
        <div class="c-map__google-map" id="map"></div>

    </div>
</section>