<?= get_header() ?>
<div class="section">
    <?php while (have_posts()) : the_post() ?>
        <div class="container">
            <h2 class="title">
                <?= the_title() ?>
            </h2>
            <?= the_content() ?>
        </div>
    <?php endwhile ?>
</div>
<?= get_footer() ?>