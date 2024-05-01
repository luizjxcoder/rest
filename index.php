<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

     <?php while ( have_posts() ) : the_post(); ?>

     <section class="container sobre">
     <h2 class="subtitulo"><?php the_title(); ?></h2>
</section>

     <?php endwhile; ?>

<?php endif; ?>
<div class="grid-8">
<p> Não exitem mais posts</p>
</div>

<?php wp_reset_postdata(); ?>
     <?php get_footer(); ?>