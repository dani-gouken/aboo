<?= get_header() ?>
<?php
while (have_posts()) {
    the_post();
?>
    <div class="container mt-md-4" style="min-height: 88.5vh;">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="section">
                    <div class="container">
                        <h2 class="title"><?= the_title() ?></h2>
                        <?php get_template_part("templates/breadcrumb/breadcrumb", get_post_type()) ?>
                        <div class="card card-plain card-blog">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <?php get_template_part("templates/single/single", get_post_type()) ?>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="info info-horizontal">
                                            <div class="icon icon-danger">
                                                <i class="nc-icon nc-refresh-69"></i>
                                            </div>
                                            <div class="description">
                                                <p>Some informations are missing or are outdated?!</p>
                                                <a href="#paper-kit" class="btn btn-link">Send us a request</a>
                                            </div>
                                        </div>
                                        <div class="info info-horizontal">
                                            <div class="icon icon-primary">
                                                <i class="nc-icon nc-alert-circle-i"></i>
                                            </div>
                                            <div class="description">
                                                <p>Needs help to accomplish a particular service? Let aboo handle it for You!</p>
                                                <a href="#paper-kit" class="btn btn-link">Contact us</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>

<?= get_footer() ?>