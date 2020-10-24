<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title>Mario's Pizzeria</title>
  </head>
  <body class="body">
    <?php wp_nav_menu( array( 'mobile-menu' => 'mobile-menu', 'container_class' => 'mobile-menu hide', 'walker' => new Walker_Nav_Mobile) ); ?>
    <nav class="nav">
      <div class="logo">
        <a href="<?php echo site_url('')?>"
          ><img
            src="<?php echo get_template_directory_uri();?>/img/Marios-Logo.svg"
            alt="Mario's Pizzeria logo"
            width="200"
        /></a>
      </div>
      <div class="menu-icon">
        <i class="fas fa-bars"></i>
      </div>
      <?php wp_nav_menu( array( 'main-menu' => 'main-menu', 'container' => ' ', 'menu_class' => 'nav-ul', 'walker' => new Walker_Nav_Main) ); ?>
    </nav>
