<?php get_header(); ?>

<div class="banner">
  <div class="banner-content">
    <h1>Bienvenido a Raxen</h1>
    <p>Transformamos tus ideas en experiencias visuales impactantes.</p>
    <button class="contact-button"><strong>Contacto</strong></button>
  </div>
</div>

<h2 class="h2-quien-somos">Proyectos</h2>
<section class="seccion-proyectos">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post(); ?>
      <div class="proyecto">
        <div class="proyecto-texto">
          <h3><?php the_title(); ?></h3>
          <div class="date">
            <p>Publicado el <?php echo get_the_date(); ?> - <?php echo get_the_time(); ?> 
              <a href="<?php comments_link(); ?>"> <?php comments_number('0 comentarios', '1 comentario', '% comentarios'); ?></a>
            </p>
          </div>
          <p><?php the_excerpt(); ?></p>
          <div><a href="<?php the_permalink(); ?>"><button class="ver-mas-button">Ver más</button></a></div>
        </div>
        <div class="proyecto-imagen">
          <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail('medium');
          } ?>
        </div>
      </div>
    <?php endwhile;
  else :
    echo '<p>No hay proyectos disponibles.</p>';
  endif;
  ?>
</section>


<!-- Sección de servicios -->
<h2 class="h2-quien-somos">Servicios</h2>
<section class="services">
  <div class="service-card" id="subseccio1">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Modelado_3d.jpg" alt="Modelado 3D" />
    <p>Modelado 3D: Creamos modelos tridimensionales para tus proyectos.</p>
  </div>
  <div class="service-card" id="subseccio2">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Webs_inmersivas.jpg" alt="Web Inmersivas" />
    <p>Web Inmersivas: Desarrollamos experiencias web interactivas.</p>
  </div>
  <div class="service-card" id="subseccio3">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Audiovisual.jpg" alt="Audiovisual" />
    <p>Audiovisual: Producción de contenido audiovisual de alta calidad.</p>
  </div>
  <div class="service-card" id="subseccio4">
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Diseño_corporativo.jpg" alt="Diseño Corporativo" />
    <p>Diseño Corporativo: Modernizamos la imagen de tu empresa.</p>
  </div>
</section>

<?php get_footer(); ?>