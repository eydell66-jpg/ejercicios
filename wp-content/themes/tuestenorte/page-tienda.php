<?php get_header(); ?>

<main class="pagina-tienda">

    <section class="cabecera-tienda">
        <span class="seccion-etiqueta">Nuestra Selección</span>
        <h1>Descubre Nuestros Cafés</h1>
        <p>
            Cafés de especialidad seleccionados de diferentes rincones del
            mundo para disfrutar de sabores únicos.
        </p>
    </section>
    <form method="GET" action="<?php echo esc_url(get_permalink()); ?>"class="filtro-origen">

        <label for="origen">Filtrar por Origen:</label>

        <select name="origen" id="origen">
            <option value="">Todos los cafés</option>

            <?php 
            $origenes = get_terms(array(
                'taxonomy' => 'origen_cafe',
                'hide_empty' => true
            ));
            if (!is_wp_error($origenes)) :
                foreach ($origenes as $termino) :
            ?>
                <option value="<?php echo esc_attr($termino->slug); ?>"
                    <?php selected(
                        isset($_GET['origen']) ? sanitize_text_field(wp_unslash($_GET['origen'])) : '',
                        $termino->slug
                    ); ?>>

                    <?php echo esc_html($termino->name); ?>
                </option>
            <?php 
                endforeach;
            endif;
            ?>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <section class="catalogo-cafes">

       <?php

$origen_seleccionado = isset($_GET['origen'])
    ? sanitize_text_field(wp_unslash($_GET['origen']))
    : '';

$cafes = new WP_Query(array(
    'post_type'      => 'cafe',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'title',
    'order'          => 'ASC',

    // Filtro por taxonomía de origen
    'tax_query' => $origen_seleccionado !== '' ? array(
        array(
            'taxonomy' => 'origen_cafe',
            'field'    => 'slug',
            'terms'    => $origen_seleccionado
        )
    ) : array()
));

if ($cafes->have_posts()) :

    $numero_cafe = 1;

    while ($cafes->have_posts()) :
        $cafes->the_post();

        $origen = get_field('origen');
        $notas = get_field('notas_de_cata');
        $tueste = get_field('nivel_de_tueste');
        $precio = get_field('precio');

        $slug_cafe = get_post_field('post_name', get_the_ID());

        $imagenes_cafes = array(
            'brasil' => 'cafe2.jpg',
            'colombia' => 'cafe1.jpg',
            'etiopia' => 'cafe3.jpg',
            'guatemala' => 'cafe4.jpg'
        );

        $archivo_imagen = isset($imagenes_cafes[$slug_cafe])
            ? $imagenes_cafes[$slug_cafe]
            : '';

        $imagen = $archivo_imagen
            ? get_template_directory_uri() . '/images/' . $archivo_imagen
            : '';
                    
        ?>

                <article class="imagen-detalle-cafe">

                    <?php if ($imagen) : ?>
                        <img 
                            src="<?php echo esc_url($imagen); ?>"
                            alt="<?php echo esc_attr(get_the_title()); ?>"
                        >
                    <?php endif; ?>

                    <div class="producto-info">

                        <span class="origen-cafe">
                            <?php echo esc_html($origen); ?>
                        </span>

                        <h2>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <h3>Notas de cata</h3>

                        <ul>
                            <?php
                            if (is_array($notas)) :
                                foreach ($notas as $nota) :
                            ?>
                                    <li><?php echo esc_html($nota); ?></li>
                            <?php
                                endforeach;
                            elseif (!empty($notas)) :
                            ?>
                                <li><?php echo esc_html($notas); ?></li>
                            <?php endif; ?>
                        </ul>

                        <p>
                            <strong>Nivel de tueste:</strong>
                            <?php echo esc_html($tueste); ?>
                        </p>

                        <strong class="precio-cafe">
                            <?php echo esc_html(number_format((float) $precio, 2, ',','.')); ?> €
                        </strong>

                    </div>

                </article>

        <?php
                $numero_cafe++;

            endwhile;

            wp_reset_postdata();

        else :
        ?>

            <p>Todavía no hay cafés disponibles.</p>

        <?php endif; ?>

    </section>

</main>

<?php get_footer(); ?>
