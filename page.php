<?php get_header(); ?>
<main>
  <h1>Test index.php </h1>
  <h2> this is a test </h2>
  <?php if(have_posts()): while(have_posts()):the_post(); ?>
  
  <h1><?php the_title(); ?></h1>
  
  <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
  <p><?php the_content(); ?></p>
  
<?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>