<?= get_header() ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="title">
                    <?php $content = $wp_query->get_queried_object(); ?>
                    <?php if ($content instanceof WP_Post_Type) : ?>
                        <?php set_query_var("post_types", [$content->name]) ?>
                        <?= $content->label ?>
                    <?php elseif ($content instanceof WP_Term) : ?>
                        <?php set_query_var("taxonomy", get_taxonomy($content->taxonomy)) ?>
                        <?= $content->name ?>
                    <?php elseif (is_archive()) : ?>
                        <?php $year     = get_query_var('year'); ?>
                        Archive (<?= $year ?>)
                    <?php endif ?>
                </h2>
                <?php if (get_query_var("paged")) : ?>
                    <p>Page <?= get_query_var("paged"); ?></p>
                <?php endif ?>
                <?php while (have_posts()) : the_post() ?>
                    <?php
                    set_query_var('content', get_post()->to_array());
                    get_template_part('templates/teaser/teaser');
                    ?>
                <?php endwhile ?>
                <?= aboo_pagination_links() ?>
            </div>
            <?= get_template_part("templates/sidebar") ?>
        </div>
    </div>
</div>
<?= get_footer() ?>