<?= get_header() ?>
<div class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="container">
                        <h2 class="title font-weight-bold"><?= the_field("block_1_title") ?></h2>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-12">
                        <p>
                            <h1><?= the_field("block_1_text") ?></h1>
                        </p>
                        <div class="my-4"></div>
                        <p>
                            <a href="<?= get_permalink(get_option('page_for_posts')) ?>" class="btn btn-round btn-warning mb-2">Get started</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 ml-auto">
                <img src="<?= the_field("block_1_image") ?>" class="img-fluid" />
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ml-auto mr-auto">
                <h2 class="title">Latest Uploads</h2>
                <ul>
                    <?php
                    $args = array(
                        'numberposts' => '10',
                        'post_type'        => ['post', 'institution', 'document', 'service'],
                    );
                    $recent_posts = wp_get_recent_posts($args);
                    ?>
                </ul>
                <?php foreach ($recent_posts as $recent) : ?>
                    <?php
                    set_query_var('content', $recent);
                    get_template_part('templates/teaser/teaser');
                    ?>
                <?php endforeach ?>
                <div class="text-center">
                    <a href="<?= get_permalink(get_option('page_for_posts')) ?>" class="btn btn-success btn-round  btn-lg">
                        <?= _e("Show more") ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= get_footer() ?>