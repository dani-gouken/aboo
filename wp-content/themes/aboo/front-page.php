<?= get_header() ?>
<div class="section">
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
                            <a href="cameroonians-index.html" class="btn btn-round btn-success mb-2">I'm a cameroonian</a>
                            <a href="#" class="btn btn-round btn-warning">I'm a foreigner</a>
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
<div class="section section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <img src="<?= the_field('block_2_image') ?>" class="img-fluid" />
            </div>
            <div class="col-md-6  ml-auto">
                <div class="row">
                    <div class="container">
                        <h2 class="title"><?= the_field("block_2_titre_1") ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?= the_field("block_2_text_1") ?>
                        </p>
                        <p class="mt-4">
                            <a href="" class="btn btn-round btn-success">Get started</a>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="container">
                        <h2 class="title"><?= the_field("block_2_titre_2") ?></h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>
                            <?= the_field("block_2_text_2") ?>
                        </p>
                        <p class="mt-4">
                            <a href="cameroonians-index.html" class="btn btn-round btn-warning">Get started</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <h2 class="title">Latest Uploads</h2>
                <ul>
                    <?php
                    $args = array(
                        'numberposts' => '10',
                        'post_type'        => ['institution', 'document', 'service'],
                    );
                    $recent_posts = wp_get_recent_posts($args);
                    ?>
                </ul>
                <?php foreach ($recent_posts as $recent) : ?>
                    <?php $post_type = get_post_type($recent["ID"]) ?>
                    <div class="card card-plain card-blog">
                        <div class="card-body">
                            <h6 class="card-category text-dark"><a href="<?= get_post_type_archive_link($post_type) ?>"><?= $post_type ?></a></h6>
                            <h3 class="card-title">
                                <a href="<?php echo get_permalink($recent['ID']) ?>"><?= $recent["post_title"] ?></a>
                            </h3>
                            <p class="card-description">
                                <?= get_the_excerpt($recent["ID"]) ?>
                                <br><a href="<?php echo get_permalink($recent['ID']) ?>"> Read More </a>
                                <a href="#pablo" class="ml-2 btn btn-small btn-dark btn-link">Download</a>
                            </p>
                            <p class="author">
                                <?= get_the_date("",false, $recent["ID"]) ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>
<?= get_footer() ?>