<?= get_header() ?>
<div class="section">
    <div class="container">
        <h2 class="title">All content
        </h2>
        <?php if (get_query_var("paged")) : ?>
            <p>Page <?= get_query_var("paged"); ?></p>
        <?php endif ?>
        <div class="row">
            <div class="col-md-8">
                <?php while (have_posts()) : the_post() ?>
                    <?php
                    set_query_var('content', get_post()->to_array());
                    get_template_part('templates/teaser/teaser');
                    ?>
                <?php endwhile ?>
                <?= aboo_pagination_links() ?>
            </div>
            <?php set_query_var("post_types",['institution', "document", "service", 'post']) ?>
            <?= get_template_part("templates/sidebar") ?>
        </div>
    </div>
</div>
</div>
<?= get_footer() ?>