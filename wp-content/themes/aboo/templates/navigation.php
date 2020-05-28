  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top nav-down bg-success">
      <div class="container">
          <div class="navbar-translate">
              <a class="navbar-brand" href="index.html" rel="tooltip" data-placement="bottom">
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
              <ul class="navbar-nav ml-auto">
                  <li class="dropdown nav-item">
                      <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                          Aboo for Cameroonians
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                          <a class="dropdown-item" href="service-listing.html">
                              Services
                          </a>
                          <a class="dropdown-item" href="Institution-listing.html">
                              Institutions
                          </a>
                          <a class="dropdown-item" href="document-listing.html">
                              Documents
                          </a>
                      </div>
                  </li>
                  <li class="dropdown nav-item">
                      <a href="#" class="dropdown-toggle nav-link" id="navbarDropdownMenuLink1" data-toggle="dropdown">
                          Aboo for diaspora
                      </a>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                          <a class="dropdown-item" href="#">
                              How to invest in cameroon
                          </a>
                          <a class="dropdown-item" href="#">
                              Take care of your familly
                          </a>
                      </div>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          About
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          Contact us
                      </a>
                  </li>
              </ul>
          </div>
      </div>
  </nav>