<p class="mb-4">
    <?= the_content() ?>
</p>
<p class="mb-2">
    <span class="font-weight-bold"><?= _e("Cost") ?></span>:
    <?php $cost = get_field("cost") ?>
    <?= $cost == null || $cost == 0 ? "Free" : "$cost XAF" ?>
</p>
<?php $file = get_field("file") ?>
<p class="mb-2"><span class="font-weight-bold"><?= _e("Downloadable") ?>:</span> <?= $file == null ? _e("No") : _e("Yes") ?></p>
<?php if ($file != null) : ?>
    <p>
        <a href="<?= $file ?>" download="" class="btn btn-warning btn-round btn-link p-0"><?= _e("Click here to download the file") ?></a>
    </p>
<?php endif ?>
<?php $delivered_by = get_field("delivered_by") ?>
<?php if ($delivered_by) : ?>
    <p class="font-weight-bold mb-2">Delivered By</p>
<?php endif ?>
<p>
    <ul>
        <?php foreach ($delivered_by as $institution) : ?>
            <?php $institution = $institution["institution"] ?>
            <li><a href="<?= get_permalink($institution->ID) ?>" class="text-info"><?= $institution->post_title ?></a></li>
        <?php endforeach ?>
    </ul>
</p>
<?php $usage = get_field("usage") ?>
<?php if ($usage) : ?>
    <p class="font-weight-bold">Usage</p>
    <p class="card-description mb-2">
        <?= $usage ?>
    </p>
<?php endif ?>
<p class="mb-2">
    <?php
    $args = array(
        'numberposts'    => -1,
        'post_type'        => 'service',
        'meta_query'    => array(
            'relation'        => 'AND',
            array(
                'key'         => 'document_required_$_document',
                'value'          => get_queried_object()->ID,
                'compare'     => '=',
            ),
        ),
    );
    $services = new WP_Query($args);
    ?>
    <?php if ($services->have_posts()) : ?>
        <span class="font-weight-bold"><?= _e("Required for") ?>:</span>
        <ul>
            <?php while ($services->have_posts()) : $services->the_post(); ?>
                <li>
                    <a class="text-info" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile; ?>
            <?php wp_reset_query() ?>
        </ul>
    <?php endif ?>
</p>