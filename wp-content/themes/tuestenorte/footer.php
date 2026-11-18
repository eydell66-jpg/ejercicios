<footer class="pie-pagina">

    <div class="contenedor-footer">
        <div class="footer-marca">
            <h2>Tueste Norte - Tostadero de Café</h2>
            <p> Descubre el autentico sabor del café.</p>
        </div>
    <div class="footer-enlaces">

        <h3>Navegación</h3>

        <ul>
            <li><a href="<?php echo esc_url( home_url('/')); ?>">Inicio</a></li>
            <li><a href="<?php echo esc_url(home_url('/tienda/')); ?>">Nuestra tienda</a></li>
            <li><a href="<?php echo esc_url(home_url('/quienes-somos/')); ?>">Quiénes Somos</a></li>
            <li><a href="<?php echo esc_url(home_url('/catas/')); ?>">Catas</a></li>
            <li><a href="<?php echo esc_url(home_url('/contacto/')); ?>">Contacto</a></li>
        </ul>

    </div>

    <!-- Contacto -->
     <div class="footer-contacto">
        <h3>Contacto</h3>

        <p>¿Tienes alguna pregunta?</p>

        <a href="<?php echo esc_url(home_url('/contacto/')); ?>">
            Escribenos
        </a>
    </div>
</div>

<!-- Derechos de autor -->
 <div class=" footer-final">
    <p>@2026 Tueste Norte. Todos los derechos reservados.</p>
</div>

</footer>

<?php wp_footer(); ?>
</body>
</html>


