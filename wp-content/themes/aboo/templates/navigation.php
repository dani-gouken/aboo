  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down bg-success">
      <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="<?= home_url() ?>" rel="tooltip" data-placement="bottom">
                  <?php if (has_custom_logo()) : ?>
                      <?= the_custom_logo() ?>
                  <?php else : ?>
                      <?= bloginfo("name") ?>
                  <?php endif ?>

              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-bar bar1"></span>
                  <span class="navbar-toggler-bar bar2"></span>
                  <span class="navbar-toggler-bar bar3"></span>
              </button>
          </div>
          <div class="collapse navbar-collapse">
              <?= wp_nav_menu(array(
                    'theme_location'  => 'menu-header',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'bs-example-navbar-collapse-1',
                    'menu_class'      => 'navbar-nav mr-auto',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                )); ?>
              <form action="<?= home_url() ?>" method="get" class="form-inline ml-auto">
                  <input placeholder="<?= _e('search') ?>" name="s" type="text" class="form-control mr-sm-2 no-border">
                  <button type="submit" class="btn btn-primary btn-just-icon btn-round"><i class="nc-icon nc-zoom-split" aria-hidden="true"></i></button>
              </form>
          </div>
      </div>
  </nav>