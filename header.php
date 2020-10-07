<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head(); ?>
    <title>Mario's Pizzeria</title>
  </head>
  <body class="body">
    <div class="mobile-menu hide">
      <ul class="mobile-menu-ul">
        <li class="mobile-li"><a href="#" class="mobile-a sub-menu-btn">Menu <i class="fa fa-caret-down"></i></a>
          <ul class="sub-menu-content hide">
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Appetizers & Sides</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Salads</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Pizza</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Italian</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Mexican</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Kids & Lite Bites</a></li>
            <li class="sub-menu-li"><a href="#" class="sub-menu-a">Drinks</a></li>
          </ul>
        </li>
        <li class="mobile-li"><a href="#" class="mobile-a">Daily Specials</a></li>
        <li class="mobile-li"><a href="#" class="mobile-a">Contact</a></li>
        <li class="mobile-li"><a href="tel:6163992570" class="mobile-a"><span class="mobile-phone">616-399-2570</span></a></li>
      </ul>
    </div>
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
      <ul class="nav-ul">
        <li class="menu-li"><a href="#" class="nav-a desk-sub-menu-btn">Menu <i class="fa fa-caret-down"></i></a>
          <ul class="desk-sub-menu-content hide">
            <li class="sub-menu-li"><a href="<?php echo site_url('/apps-sides')?>" class="sub-menu-a">Appetizers & Sides</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/salads')?>" class="sub-menu-a">Salads</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/pizza')?>" class="sub-menu-a">Pizza</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/italian')?>" class="sub-menu-a">Italian</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/mexican')?>" class="sub-menu-a">Mexican</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/kids-lite-bites')?>" class="sub-menu-a">Kids & Lite Bites</a></li>
            <li class="sub-menu-li"><a href="<?php echo site_url('/drinks')?>" class="sub-menu-a">Drinks</a></li>
          </ul>
        </li>
        <li><a href="<?php echo site_url('/daily-specials')?>" class="nav-a">Daily Specials</a></li>
        <li><a href="<?php echo site_url('/contact')?>" class="nav-a">Contact</a></li>
        <li><a href="tel:6163992570" class="phone-link">616-399-2570</a></li>
      </ul>
    </nav>
