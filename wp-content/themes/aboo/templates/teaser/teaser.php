<?php
$content = get_query_var("content");
$post_type = get_post_type($content["ID"]);
$terms = get_the_terms($content["ID"], aboo_get_taxonomy_by_post_type($post_type));
if (!$terms) {
    $terms = [];
}
?>
<div class="card card-plain card-blog">
    <div class="card-body">
        <h6 class="card-category">
            <a class="<?= aboo_get_post_type_color($post_type) ?>" href=" <?= get_post_type_archive_link($post_type) ?>"><?= $post_type ?></a>
        </h6>
        <h3 class="card-title">
            <a href="<?php echo get_permalink($content['ID']) ?>"><?= $content["post_title"] ?></a>
        </h3>
        <p class="author">
            <?php foreach ($terms as $term) : ?>
                <a href="<?= get_term_link($term) ?>">
                    <b><?= $term->name ?></b>
                </a>, 
            <?php endforeach ?>
            <?= get_the_date("", false, $content["ID"]) ?>
        </p>
        <p class="card-description">
            <?= get_the_excerpt($content["ID"]) ?>
            <br><a href="<?php echo get_permalink($content['ID']) ?>"> Read More </a>
            <?php if ($post_type == "document" && ($file = get_field("file", $content["ID"]))) : ?>
                <a download="" href="<?= $file ?>" class="ml-2 btn btn-small btn-dark btn-link">Download</a>
            <?php endif ?>
        </p>
    </div>
</div>