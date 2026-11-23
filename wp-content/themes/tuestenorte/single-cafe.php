
<?php get_header(); ?>

<main class="pagina-cafe-individual">

    <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

        <?php
            // Recuperamos campos ACF
            $origen = get_field('origen');
            $notas = get_field('notas_de_cata');
            $tueste = get_field('nivel_de_tueste');
            $precio = get_field('precio');
        ?>

        <article class="detalle-cafe">
        
            <div class="imagen-detalle-cafe">

                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?>
                <?php endif; ?>

            </div>

            <span class="origen-cafe">
                <?php echo esc_html($origen); ?>
            </span>

            <h1><?php the_title(); ?></h1>

            <h2>Un café con personalidad propia</h2>

            <h3>Notas de cata</h3>

            <ul>
                <?php if (is_array($notas)) : ?>

                    <?php foreach ($notas as $nota) : ?>
                        <li><?php echo esc_html($nota); ?></li>
                    <?php endforeach; ?>

                <?php elseif (!empty($notas)) : ?>

                    <li><?php echo esc_html($notas); ?></li>

                <?php endif; ?>
            </ul>

            <p>
                <strong>Nivel de Tueste:</strong>
                <?php echo esc_html($tueste); ?>
            </p>

            <p class="precio-cafe">
                <strong>
                    <?php
                    echo esc_html(
                        number_format(
                            (float) str_replace(',', '.', (string) $precio),
                            2,
                            ',',
                            '.'
                        )
                    );
                    ?> €
                </strong>
            </p>

            <a class="boton-volver-tienda"
               href="<?php echo esc_url(home_url('/tienda/')); ?>">
                Volver a la tienda
            </a>

        </article>

        <?php endwhile; ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>


                    



