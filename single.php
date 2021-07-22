<?php get_header(); ?>

    <!-- blog -->
    <section class="blog singleStrana">


    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <article class="d-flex">

        <div class="featured-image">
          <?php the_post_thumbnail(); ?>
        </div>

        <div class="metaData">
          <p><b>objavljeno:</b>&nbsp; <i><?php echo get_the_date('d.m.Y.'); ?></i> </p>
          <p><b>kategorija:</b>&nbsp; <i><a href=""><?php the_category(', '); ?></a></i> </p>
          <p><b>share:</b>&nbsp; <a><i class="fab fa-facebook-square"></i></a> <a><i class="fab fa-twitter-square"></i></a> </p>
        </div>

        <div class="content">
          <h2><?php the_title(); ?></h2>
          <?php the_content(); ?>

          <!-- <a href="<?php the_permalink(); ?>"><?php echo ('Procitaj vise'); ?></a> -->
        </div>

      </article>

      <?php endwhile; else : ?>
	    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
    <?php endif; ?>


      
    </section>

      


   



<?php get_footer(); ?>