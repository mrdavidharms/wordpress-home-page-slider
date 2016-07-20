

<div>
  <?php get_header(); ?>
</div>

<?php
  $args = array(
  'post_type' => 'slides',
  'orderby' => 'DESC', 'menu_order',
  'posts_per_page' => -1
);

$slides = new WP_Query( $args );


if ( $slides->have_posts() ) : ?>
<div class='owl-carousel'>
  <?php while( $slides->have_posts() ) : $slides->the_post(); ?>
  <div class="item">
    <?php the_post_thumbnail('slides'); ?>
  </div>
    <?php endwhile; ?>
</div>

<?php endif; wp_reset_query(); ?>

<?php get_footer(); ?>
