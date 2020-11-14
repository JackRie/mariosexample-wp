<?php get_header(); ?>

    <main>
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?> 
            <div class="home">
            <?php the_content(); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        
      <?php get_footer(); ?>