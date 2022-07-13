<?php
/**
 * The Header for our theme.
 *
 * @package boiler
 */

?><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js nav-closed" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width" />

  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/images/apple-touch-icon.png">

  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
  <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet'>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="<?php bloginfo('template_url'); ?>/bower_components/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>


  <?php wp_head(); ?>

</head>
<body class='styles styles_index index <?php echo $value; ?>'>
    <div id='responsive-menu-background-wrapper'></div>
    <nav class='primary-navbar navbar navbar-expand-xl navbar-light clear-header' id='primary-nav'>
      <div class='container'>
      	
      	<a class='navbar-brand brand' href='https://cebroker.com/'>
          <img src='<?php bloginfo('template_url'); ?>/images/logo.svg' width='172px' class="primary-logo">
        </a>
        <form class='form-inline'>
          <div class='d-none d-sm-block d-xl-none'>
            <a href="https://launchpad.cebroker.com/login" class='btn btn-secondary'>
              Sign in
            </a>
            <a href="https://cebroker.com/account/freetrial" class='btn btn-primary half-margin-right' style='font-weight:600;'>
              7 day trial
            </a>

          </div>
          <button aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation' class='tcon tcon-menu--xcross menu-button toggle-menu-button navbar-toggler' data-target='#navbarSupportedContent' data-toggle='collapse' type='button'>
            <span aria-hidden='true' class='tcon-menu__lines'></span>
            <span class='tcon-visuallyhidden'>
              toggle menu
            </span>
          </button>
        </form>
        <div class='collapse navbar-collapse' id='navbarSupportedContent'>
          <ul class='navbar-nav mr-auto'>
            <li class='nav-item'>
              <a class='nav-link text-color' href='https://cebroker.com/features'>
                Features
              </a>
            </li>
    			  <li class='nav-item'>
              <a class='nav-link text-color' href='https://cebroker.com/plans'>
                Plans
              </a>
            </li>
            <li class='nav-item'>
              <a class='nav-link text-color' href='https://courses.cebroker.com/'>
                Find courses
              </a>
            </li>
            <li class='nav-item dropdown'>
              <a aria-expanded='false' aria-haspopup='true' class='nav-link text-color' data-toggle='dropdown' href='#' id='navbarDropdown' role='button'>
                Company
              </a>
              <div aria-labelledby='navbarDropdown' class='dropdown-menu company-menu'>
                <div class="company-menu-container">
                  <div class="row no-gutters">
                    <div class="col-lg-8">
                      <div class="dropdown-inner-wrapper">
                        <h5 class="dropdown-header">Orginizations</h5>
                        <a class='dropdown-item' href='https://cebroker.com/providers'>
                          <div class='media align-items-center'>
                            <img class='margin-right' src='<?php bloginfo('template_url'); ?>/images/product-icon-providers.svg'>
                            <div class='media-body'>
                              <p class='mt-0 medium-font quarter-margin-bottom '>
                                Educational Providers
                              </p>
                              <h4 class='no-margin-bottom extra-light-text-color'>
                                Advertise board-accredited courses. 
                              </h4>
                            </div>
                          </div>
                        </a>
                        <a class='dropdown-item' href='https://cebroker.com/business'>
                          <div class='media align-items-center'>
                            <img class='margin-right' src='<?php bloginfo('template_url'); ?>/images/product-icon-businesses.svg'>
                            <div class='media-body'>
                              <p class='mt-0 medium-font quarter-margin-bottom'>
                                Businesses
                              </p>
                              <h4 class='no-margin-bottom extra-light-text-color'>
                                Reduce risk with daily automated verifications. 
                              </h4>
                            </div>
                          </div>
                        </a>
                        <a class='dropdown-item' href='https://cebroker.com/boards'>
                          <div class='media align-items-center'>
                            <img class='margin-right' src='<?php bloginfo('template_url'); ?>/images/product-icon-boards.svg'>
                            <div class='media-body'>
                              <p class='mt-0 medium-font quarter-margin-bottom'>
                                Licensing boards
                              </p>
                              <h4 class='no-margin-bottom extra-light-text-color'>
                                Cut audit costs and increase compliance.
                              </h4>
                            </div>
                          </div>
                        </a>
                      </div><!-- end of dropdown inner wrapper -->
                    </div><!-- end of col -->
                    <div class="col-lg-4 shaded">
                      <div class="dropdown-inner-wrapper">
                        <h5 class="dropdown-header">Company</h5>
                        <a class='dropdown-item primary-hover' href='https://cebroker.com/about'>
                          <div class='media'>
                            <i class="material-icons">
                              chevron_right
                            </i>
                            <div class='media-body'>
                              <h4 class='mt-0 medium-font quarter-margin-bottom'>
                                About
                              </h4>
                            </div>
                          </div>
                        </a>
                        <a class='dropdown-item primary-hover' href='https://cebroker.com/careers'>
                          <div class='media'>
                            <i class="material-icons">
                              chevron_right
                            </i>
                            <div class='media-body'>
                              <h4 class='mt-0 medium-font quarter-margin-bottom'>
                                Careers
                              </h4>
                            </div>
                          </div>
                        </a>
                        <a class='dropdown-item primary-hover' href='https://cebroker.com/leadership'>
                          <div class='media'>
                            <i class="material-icons">
                              chevron_right
                            </i>
                            <div class='media-body'>
                              <h4 class='mt-0 medium-font quarter-margin-bottom'>
                                Leadership
                              </h4>
                            </div>
                          </div>
                        </a>
                        <a class='dropdown-item primary-hover' href='https://cebroker.com/sustainability'>
                          <div class='media'>
                            <i class="material-icons">
                              chevron_right
                            </i>
                            <div class='media-body'>
                              <h4 class='mt-0 medium-font quarter-margin-bottom'>
                                Sustainability
                              </h4>
                            </div>
                          </div>
                        </a>
                      </div><!-- end of dropdown inner wrapper -->
                    </div><!-- end of col -->
                  </div><!-- end of row -->
                </div><!-- end of container -->
              </div><!-- end of dropdown -->
            </li>
            <li class='nav-item'>
              <a class='nav-link text-color' href='<?php the_field('contact_link', 'option'); ?>'>
                Support
              </a>
            </li>
          </ul>
          <div class='action-buttons'>
            <form class='form-inline'>
              <a class='btn btn-secondary half-margin-right' href="<?php the_field('sign_in_link', 'option'); ?>">
                Sign in
              </a>
				<a href="https://marketing.evercheck.com/schedule-demo/" class='btn btn-primary half-margin-right' style='font-weight:600;' >
              7 day trial
            </a>
            </form>
          </div>
        </div>
      </div>
    </nav>
