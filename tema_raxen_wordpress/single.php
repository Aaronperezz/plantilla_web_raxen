<?php get_header(); ?>

<section class="single-proyecto">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <article class="proyecto">
        <!-- Imagen destacada -->
        <div class="proyecto-imagen">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('large');
          } ?>
        </div>

        <!-- Contenido del proyecto -->
        <div class="proyecto-texto">
          <h1><?php the_title(); ?></h1>
          <div class="date">
            <p>
              Publicado el <?php echo get_the_date(); ?> -
              <?php comments_number('Sin comentarios', '1 comentario', '% comentarios'); ?>
            </p>
          </div>

          <div class="contenido">
            <?php the_content(); ?>
          </div>

          <!-- Comentarios -->
          <div class="comentarios">
            <?php comments_template(); ?>
          </div>

          <!-- Botón para volver -->
          <div style="margin-top: 30px;">
            <a href="<?php echo home_url(); ?>" class="ver-mas-button">← Volver a inicio</a>
          </div>
        </div>
      </article>
    <?php endwhile;
  else :
    echo '<p>No se encontró el contenido.</p>';
  endif;
  ?>
</section>

<?php get_footer(); ?>