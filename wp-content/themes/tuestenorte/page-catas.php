<?php get_header(); ?>

<main class="pagina-catas">

    <!-- Portada -->
     <section class="hero-catas">
        <div class="contenido-hero-catas">
            <span class="etiqueta-catas">EXPERIENCIAS TUESTENORTE</span>
            <h1>Descubre el café a través de los sentidos</h1>
            <p>
                Aprende a reconocer aromas, sabores y matices en nuestras
                catas de café de especialidad. Una experiencia para disfrutar,
                descubrir y compartir
            </p>
            <a href="#inscripcion-catas" class="boton-catas">
                Reserva tu plaza
            </a>
        </div>
    </section>
    
    <!-- Presentacion -->
     <section class="proximas-catas">
        <div class="encabezado-catas">
            <span class="etiqueta-catas">NUESTRAS SESIONES</span>
            <h2>¿Qué descubrirás en una cata?</h2>
        </div>
        <div class="rejilla-catas">

            <article class="tarjeta-cata">
                <div class="numero-cata">01</div>
                <h3>Origenes del café</h3>
                <p>
                    Conoce las caracteristicas de cafés procedentes
                    de diferentes regiones del mundo.
                </p>
            </article>
            <article class="tarjeta-cata">
                <div class="numero-cata">02</div>
                <h3>Aromas y sabores</h3>
                <p>
                    Aprende a identificar notas florales, frutales,
                    dulces, especiadas y achocolatadas
                </p>

            </article>
            <article class="tarjeta-cata">
                <div class="numero-cata">03</div>
                <h3>El arte de degustar</h3>
                <p>
                    Descubre cómo influyen el tueste, la molienda
                    y la preparación en cada taza.
                </p>
            </article>
        </div>
</section>

<!-- Formulario -->
 <section class="inscripcion-catas" id="inscripcion-catas">
    <div class="texto-inscripcion">
        <span class="etiqueta-catas">APUNTATE A NUESTRAS CATAS</span>
        <h2>Reserva tu experiencia</h2>
        <p>
            ¿Te gustaría participar en nuestra próxima cata?
            Déjanos tus datos y nos pondremos en contacto contigo
            para informarte de las próximas fechas.
        </p>
    </div>

    <form class="formulario-catas" action="#" method="post">

        <label for="nombre-cata">Nombre completo</label>
        <input type="text" id="nombre-cata" name="nombre"
            placeholder="Tu nombre" required>

        <label for="email-cata">Correo electrónico</label>
        <input type="email" id="email-cata" name="email"
          placeholder="Tu correo electrónico" required>

        <label for="personas-cata">Número de personas</label>
        <select id="personas-cata" name="personas" required>
            <option value="">Selecciona una opcion</option>
            <option value="1">1 persona</option>
            <option value="2">2 personas</option>
            <option value="3">3 personas</option>
            <option value="4">4 personas</option>
        </select>

        <label for="mensaje-cata">Mensaje (opcional)</label>
        <textarea id="mensaje-cata" name="mensaje" rows="4"
            placeholder="Cuéntanos cualquier detalle que debamos saber "></textarea>

        <button type="submit">Enviar solicitud</button>
</form>
</section>
</main>

<?php get_footer(); ?>
