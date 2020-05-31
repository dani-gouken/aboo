<?php if ($email = get_field("email")) : ?>
    <p class="font-weight-bold mb-2">Email</p>
    <p>
        <?= $email  ?>
    </p>
<?php endif ?>
<?php if ($location = get_field("location")) : ?>
    <p class="font-weight-bold mb-2">Location</p>
    <p>
        <?= $location ?>
    </p>
<?php endif ?>
<?php if ($phone_numbers = get_field("phone_numbers")) : ?>
    <p class="font-weight-bold mb-2">Phone numbers</p>
    <p>
        <ul>
            <?php foreach ($phone_numbers as  $phone_number) : ?>
                <li><?= $phone_number["phone_number"] ?></li>
            <?php endforeach ?>
        </ul>
    </p>
<?php endif ?>
<?php if ($website = get_field("website")) : ?>
    <p class="font-weight-bold mb-2">Website</p>
    <p><a href="#" target="__blank" class="text-info"><?= $website ?></a></p>
<?php endif ?>
<?php if ($images = get_field("images")) : ?>
    <p class="font-weight-bold mb-2">Images</p>
    <div class="row mb-2">
        <?php foreach ($images as $image) : ?>
            <div class="col-md-6">
                <img src="<?= $image["image"] ?>">
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>

<?php if ($about = get_field("about")) : ?>
    <p class="font-weight-bold">About</p>
    <p class="card-description mb-2">
        <?= $about  ?>
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
                'key'         => 'delivered_by_$_institution',
                'value'          => get_queried_object()->ID,
                'compare'     => '=',
            ),
        ),
    );
    $services = new WP_Query($args);
    ?>
    <?php if ($services->have_posts()) : ?>
        <span class="font-weight-bold">Service delivered</span>
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
<p class="mb-2">
    <?php
    $args = array(
        'numberposts'    => -1,
        'post_type'        => 'document',
        'meta_query'    => array(
            'relation'        => 'AND',
            array(
                'key'         => 'delivered_by_$_institution',
                'value'          => get_queried_object()->ID,
                'compare'     => '=',
            ),
        ),
    );
    $services = new WP_Query($args);
    ?>
    <?php if ($services->have_posts()) : ?>
        <span class="font-weight-bold">Document delivered</span>
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