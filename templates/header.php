<header class="banner" role="banner">
  <?php if (is_front_page()) { ?>
  <div class="header-image" style="background-image: url(<?php header_image(); ?>); color: <?php header_textcolor() ?>">
    <div class="container">
      <div class="row">
        <div class="col-md-6 sidebar-header-left">
          <div class="row">
            <div class="col-md-12">
              <?php dynamic_sidebar('sidebar-header-left'); ?>
            </div>
          </div>
          <div class="row row-bottom">
            <div class="col-md-12">
              <?php dynamic_sidebar('sidebar-header-bottom-left'); ?>
            </div>
          </div>
        </div>
        <div class="col-md-6 sidebar-header-right">
          <div class="row">
            <div class="col-md-12">
              <?php dynamic_sidebar('sidebar-header-right'); ?>
            </div>
          </div>
          <div class="row row-bottom">
            <div class="col-md-12">
              <?php dynamic_sidebar('sidebar-header-bottom-right'); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php } ?>
  <div class="container">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand visible-xs" href="<?= esc_url(home_url('/')); ?>"><?php _e('Menu', 'sage'); ?></a>
        </div>

        <nav class="collapse navbar-collapse" role="navigation">
          <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav']);
          endif;
          ?>
        </nav>
      </div>
    </nav>
  </div>
</header>
