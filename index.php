<?php get_header(); ?>

<section class="row">
  <div class="small-12 columns text-center">
    <div class="leader">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <p><?php the_content(); ?></p>
      $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
})
      <div class="owl-carousel">
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
      </div>

	<?php endwhile; else : ?>

	  <p><?php _e( 'Sorry, no results found.', 'treehouse-portfolio' ); ?></p>

	<?php endif; ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>
