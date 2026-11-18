<?php get_header(); ?>

<main class="pagina-quienes-somos">

<!--Portada-->
<section class="hero-quienes">
    <div class="contenido-quienes">
        <span class="etiqueta-quienes">Nuestra Historia</span>

            <h1>El café es mucho mas que una bebida</h1>

            <p>En Tueste Norte creemos que cada taza cuenta una historia.
                un viaje desde el origen del grano hasta el momento en que 
                disfrutas de su aroma y sabor.
            </p>
        
    </div>
    
    <div class="imagen-quienes">
        <img src="<?php echo esc_url(get_template_directory_uri() . '/images/portada-cafe.jpg'); ?>"
                 alt="Café de especialidad Tueste Norte">

    </div>

</section>

<!--Nuestra Filosofia-->

<section class="filosofia-quienes">
    <span class="etiqueta-quienes">Nuestra Filosofia</span>

    <h2>Pasión por el buen café</h2>

    <p> 
        En Tueste Norte seleccionamos cafés especiales procedentes
        de diferentes ricones del mundo. Nos apasiona descubrir nuevos 
        aromas, sabores y matices que hacen única cada taza.
    </p>

    <p>
        Queremos acercar la cultura del café de especialidad a todas 
        las personas, ofreciendo una experiencia que comienza en el origen 
        y termina en cada sorbo.
    </p>
</section>

<!-- NUESTROS VALORES -->
<section class="valores-quienes">

    <div class="encabezado-quienes">
        <span class="etiqueta-quienes">LO QUE NOS DEFINE</span>
        <h2>Nuestros Valores</h2>
    </div>

    <div class="rejilla-valores">

        <article class="tarjeta-valor">
            <h3>Calidad</h3>
            <p>
                Buscamos cafés seleccionados por su calidad,
                aroma y personalidad.
            </p>
        </article>

        <article class="tarjeta-valor">
            <h3>Origen</h3>
            <p>
                Nos encanta descubrir el origen de cada grano
                y conocer las características de cada región.
            </p>
        </article>

        <article class="tarjeta-valor">
            <h3>Experiencia</h3>
            <p>
                Queremos que cada taza sea una oportunidad
                para descubrir nuevos sabores.
            </p>
        </article>

    </div>
</section>


<!--Final-->
<section class="final-quienes">

    <h2>Descubre el mundo del café con nosotros</h2>

    <p>
        Explora nuestra seleccion y encuentra tu próximo café favorito
    </p>

    <a href="<?php echo esc_url(home_url('/tienda/')); ?>"
        class="boton-principal">
        DESCUBRIR NUESTROS CAFES
    </a>
</section>
</main>

<?php get_footer(); ?>






     
