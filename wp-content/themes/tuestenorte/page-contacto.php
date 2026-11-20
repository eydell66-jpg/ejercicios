<?php get_header(); ?>

<main class="pagina-contacto">

<!-- Portada -->
 
<section class="hero-contacto">
    <div class="contenido-hero-contacto">
        <span class="etiqueta contacto">ESTAMOS AQUI PARA TI</span>
        <h1>Hablemos de Café</h1>
        <p>
            ¿Tienes palguna regunta sobre nuestros cafés, nuestras catas o 
            nuestros productos? Estaremos encantados de ayudarte.
        </p>
    </div>
</section>
<!-- Informacion y Formulario -->

<section class="contenido-contacto">
    <div class="informacion-contacto">
        <span class="etiqueta-conacto">CONTACTA CON NOSOTROS</span>
        <h2>Nos encanatará escucharte</h2>
        <p>
            En Tueste Norte creemos que cada  conversación es una 
            oportunidad para compartir nuestra pasión por el café.
        </p>
    <div class="dato-contacto">
        <h3>Correo electrónico</h3>
        <p>hola@tuestenorte.com</p>
    </div>
    <div class="dato-contacto">
        <h3>Atención  al cliente</h3>
        <p>Lunes a Viernes - 9:00 -18:00</p>
    </div>
    <div class="dato-contacto">
        <h3>Redes sociales</h3>
        <p>Síguenos y descubre nuestro mundo cafetero. </p>
    </div>
</div>
<div class="formulario-contacto-contenedor">
    <h2>Envíanos un mensaje</h2>

    <form class="formulario-contacto" action="#" method="post">

        <label for="nombre-contacto">Nombre completo</label>
        <input type="text" id="nombre-contacto"
            name="nombre" placeholder="Tu nombre" required>

        <label for="email-contacto">Correo electrónico</label>
        <input type="email" id="email-contacto"
            name="email" placeholder="Tu correo electrónico" required>

        <label for="asunto-contacto">Asunto</label>
        <textarea id="mensaje-contacto" name="mensaje"
            rows="5" placeholder="Escribe tu mensaje..." required></textarea>

        <button type="submit">Enviar mensaje</button>
    </form>
</div>
</section>
</main>

<?php get_footer(); ?>