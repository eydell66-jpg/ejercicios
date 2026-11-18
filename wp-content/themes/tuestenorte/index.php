
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_title();?>
    <?php the_content();?>

<?php endwhile; else: ?>
    <p><?php esc_html_e( 'Lo sentimos, no se encontraron entradas.' ); ?></p>
<?php endif; ?>

<?php get_header(); ?>

<main>

    <section class="hero">
        <div class="hero-content">
            <h1>Descubre el auténtico sabor del café</h1>

            <p>
                Explora nuestra selección de cafés
                y descubre nuevos aromas y sabores.
            </p>

            <a href="#cafes" class="btn">
                Descubrir cafés
            </a>
        </div>
    </section>

    <section id="cafes" class="cafes">

        <h2>Nuestros cafés</h2>

        <p class="section-description">
            Cuatro variedades, cuatro experiencias diferentes.
        </p>

        <div class="cafes-container">

            <article class="cafe-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cafe1.jpg" alt="Café 1">
                <h3>Café 1</h3>
                <p>Origen: Pendiente</p>
                <p>Notas: Pendiente</p>
                <p>Tueste: Pendiente</p>
                <strong>Precio: Pendiente</strong>
            </article>

            <article class="cafe-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cafe2.jpg" alt="Café 2">
                <h3>Café 2</h3>
                <p>Origen: Pendiente</p>
                <p>Notas: Pendiente</p>
                <p>Tueste: Pendiente</p>
                <strong>Precio: Pendiente</strong>
            </article>

            <article class="cafe-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cafe3.jpg" alt="Café 3">
                <h3>Café 3</h3>
                <p>Origen: Pendiente</p>
                <p>Notas: Pendiente</p>
                <p>Tueste: Pendiente</p>
                <strong>Precio: Pendiente</strong>
            </article>

            <article class="cafe-card">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cafe4.jpg" alt="Café 4">
                <h3>Café 4</h3>
                <p>Origen: Pendiente</p>
                <p>Notas: Pendiente</p>
                <p>Tueste: Pendiente</p>
                <strong>Precio: Pendiente</strong>
            </article>

        </div>

    </section>

</main>

<?php get_footer(); ?>

