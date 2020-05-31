<?= get_header() ?>
<?php while (have_posts()) : the_post(); ?>
    <?php
    $terms = get_the_terms(get_post(), aboo_get_taxonomy_by_post_type(get_post()->post_type));

    ?>

    <div class="section">
        <div class="container">
            <div class="card card-plain card-blog">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h2 class="title"><?= the_title() ?></h2>
                            <?php get_template_part("templates/breadcrumb/breadcrumb", get_post_type()) ?>
                            <p class="author">
                                <?php if ($terms != null) : ?>
                                    <?php foreach ($terms as $term) : ?>
                                        <a href="<?= get_term_link($term) ?>">
                                            <b><?= $term->name ?></b>
                                        </a>,
                                    <?php endforeach ?>
                                <?php endif ?>
                                <?= get_the_date("", false, $content["ID"]) ?>
                            </p>
                            <?php get_template_part("templates/single/single", get_post_type()) ?>
                        </div>
                        <?php set_query_var("post_types", [get_post()->post_type]) ?>
                        <?= get_template_part("templates/sidebar") ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php endwhile ?>
<?= get_footer() ?>