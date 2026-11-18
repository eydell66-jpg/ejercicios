<?php get_header(); ?>

<main class="inicio">

    <!-- Portada principal -->
    <section class="hero-inicio">

        <div class="hero-contenido">
            <span class="hero-etiqueta">Café de especialidad</span>

            <h1>El buen café<br>comienza en el origen.</h1>

            <p>
                Descubre cafés seleccionados por su origen, aroma y personalidad.
                Una experiencia diferente en cada taza.
            </p>

            <a href="<?php echo esc_url(home_url('/tienda/')); ?>"
               class="boton-principal">
                Descubre nuestros cafés
            </a>
        </div>

        <div class="hero-imagen">
            <img
                src="<?php echo esc_url(get_template_directory_uri() . '/images/portada-cafe.jpg'); ?>"
                alt="Café de especialidad"
            >
        </div>

    </section>

    <!-- Presentación de la marca -->
    <section class="presentacion-inicio">

        <span class="seccion-etiqueta">Nuestra filosofía</span>

        <h2>Mucho más que una taza de café</h2>

        <p>
            En Tueste Norte creemos que cada café cuenta una historia.
            Seleccionamos granos de diferentes partes del mundo para
            acercarte sabores únicos, aromas especiales y momentos
            que merecen disfrutarse sin prisa.
        </p>

        <a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>"
           class="enlace-texto">
            Conoce nuestra historia
        </a>

    </section>

    <!-- Cafés destacados -->
    <section class="cafes-destacados">

        <div class="encabezado-seccion">

            <div>
                <span class="seccion-etiqueta">Selección especial</span>
                <h2>Nuestro café</h2>
            </div>

            <a href="<?php echo esc_url(home_url('/tienda/')); ?>"
               class="enlace-texto">
                Ver toda la tienda
            </a>

        </div>

        <div class="rejilla-cafes">

            <article class="tarjeta-cafe">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe1.jpg'); ?>"
                     alt="Café Colombia">

                <div class="informacion-cafe">
                    <span>Colombia</span>
                    <h3>Colombia, Huila</h3>
                    <p>Chocolate, caramelo y frutos rojos.</p>
                    <strong>12,50 €</strong>
                </div>
            </article>

            <article class="tarjeta-cafe">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe2.jpg'); ?>"
                     alt="Café Brasil">

                <div class="informacion-cafe">
                    <span>Brasil</span>
                    <h3>Brasil, Cerrado</h3>
                    <p>Avellana, chocolate y nueces.</p>
                    <strong>11,90 €</strong>
                </div>
            </article>

            <article class="tarjeta-cafe">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe3.jpg'); ?>"
                     alt="Café Etiopía">

                <div class="informacion-cafe">
                    <span>Etiopía</span>
                    <h3>Etiopía Yirgacheffe</h3>
                    <p>Notas florales, cítricas y de jazmín.</p>
                    <strong>14,50 €</strong>
                </div>
            </article>

            <article class="tarjeta-cafe">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe4.jpg'); ?>"
                     alt="Café Guatemala">

                <div class="informacion-cafe">
                    <span>Guatemala</span>
                    <h3>Guatemala, Antigua</h3>
                    <p>Cacao, especias y naranja.</p>
                    <strong>13,20 €</strong>
                </div>
            </article>

        </div>

    </section>

    <!-- Sección de catas -->
    <section class="seccion-catas">

        <div class="catas-contenido">

            <span class="seccion-etiqueta">Descubre nuestros sabores</span>

            <h2>El café también se comparte.</h2>

            <p>
                Aprende a reconocer aromas, sabores y matices
                en nuestras experiencias de cata mensuales.
            </p>

            <a href="<?php echo esc_url(home_url('/catas/')); ?>"
               class="boton-secundario">
                Reserva tu experiencia
            </a>

        </div>

    </section>

</main>

<?php get_footer(); ?>
