<?= get_header() ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="title">
                    Search result for : "<?= get_search_query() ?>"
                </h2>
                <?php if (get_query_var("paged")) : ?>
                    <p>Page <?= get_query_var("paged"); ?></p>
                <?php endif ?>
                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                        set_query_var('content', get_post()->to_array());
                        get_template_part('templates/teaser/teaser');
                        ?>
                    <?php endwhile ?>
                    <?= aboo_pagination_links() ?>
                <?php else : ?>
                    <h3>No result found</h3>
                <?php endif ?>
            </div>
            <?= get_template_part("templates/sidebar") ?>
        </div>
    </div>
</div>
<?= get_footer() ?>