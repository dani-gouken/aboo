<nav aria-label="breadcrumb">
    <ol class="breadcrumb px-0 bg-transparent">
        <li class="breadcrumb-item"><a href="<?= home_url() ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?= get_post_type_archive_link(get_post_type()) ?>"><?= get_post_type_object(get_post_type())->label ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?= the_title() ?></li>
    </ol>
</nav>