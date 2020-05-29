<p class="font-weight-bold mb-2"><?php _e("Delivered By", "aboo") ?></p>
<?php $deliveredBy = get_field("delivered_by") ?>
<?php if (!empty($deliveredBy)) : ?>
    <ul>
        <?php foreach ($deliveredBy as $institution_array) : ?>
            <?php $institution = end($institution_array); ?>
            <li><a href="<?= get_permalink($institution->post_title) ?>" class="text-info"><?= $institution->post_title ?></a></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>
<p class="mb-2">
    <span class="font-weight-bold">Cost</span>:
    <?= $cost == null || $cost == 0 ? "Free" : "$cost XAF" ?>
</p>
<p class="font-weight-bold">Document required</p>
<p class="mb-2">
    <?php var_dump(get_field("document_required")) ?>
    <ul>
        <li><a href="#" class="text-info">Photocopy of the Natinal Card (50 XAF)</a></li>
        <li><a href="#" class="text-info">Photocopy of the Natinal Card (20 000 XAF)</a></li>
        <li><a href="#" class="text-info">Photocopy of the Natinal Card (Free)</a></li>
    </ul>
</p>
<p class="font-weight-bold">Other requirement</p>
<p class="mb-2">
    <ul>
        <li>02 4x4 Photo</li>
    </ul>
</p>
<p class="mb-4">
    <?= the_content() ?>
</p>
<p class="mb-2">
    <span class="font-weight-bold"><u>Frequently asked question</u></span>
    <ul>
        <li>
            <p class="font-weight-bold">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatum odit magni fugit, placeat quam est ?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In veritatis, consectetur accusamus quam repellendus, tempore provident at culpa ducimus, cumque error aut porro? Hic, harum dolorum nesciunt autem, enim unde!
            </p>
        </li>
        <li>
            <p class="font-weight-bold">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore voluptatum odit magni fugit, placeat quam est ?
            </p>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. In veritatis, consectetur accusamus quam repellendus, tempore provident at culpa ducimus, cumque error aut porro? Hic, harum dolorum nesciunt autem, enim unde!
            </p>
        </li>
    </ul>
</p>