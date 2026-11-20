<?php get_header(); ?>

<main class="pagina-blog">

    <!-- CABECERA DEL BLOG -->
    <section class="cabecera-blog">
        <span class="etiqueta-blog">TUESTE NORTE</span>
        <h1>Nuestro blog</h1>
        <p>Historias, consejos y curiosidades del fascinante mundo del café.</p>
    </section>

    <!-- LISTADO DE ENTRADAS -->
    <section class="listado-entradas">

        <?php if ( have_posts() ) : ?>

            <?php while ( have_posts() ) : the_post(); ?>

                <article class="tarjeta-entrada">

                    <?php if ( has_post_thumbnail() ) : ?>
                        <a href="<?php the_permalink(); ?>" class="imagen-entrada">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                    <?php endif; ?>

                    <div class="contenido-entrada">

                        <span class="fecha-entrada">
                            <?php echo esc_html(get_the_date()); ?>
                        </span>

                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <div class="resumen-entrada">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="leer-mas">
                            Leer más
                        </a>

                    </div>

                </article>

            <?php endwhile; ?>

            <div class="paginacion-blog">
                <?php the_posts_pagination(); ?>
            </div>

        <?php else : ?>

            <p class="sin-entradas">
                Todavía no hay entradas publicadas.
            </p>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
