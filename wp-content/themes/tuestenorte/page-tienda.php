<?php get_header(); ?>

<main class="pagina-tienda">

    <section class="cabecera-tienda">
        <span class="seccion-etiqueta">Nuestra Seleccion</span>
        <h1>Descubre Nuestros Cafés</h1>
        <p>
            Cafés de especialidad seleccionados de diferentes rincones del
            mundo para disfrutar de  sabores únicos. 
        </p>
    </section>

    <section class="catalogo-cafes">

        <article class="producto-cafe">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe1.jpg'); ?>" alt="Café Colombia Huila">
            <!-- cafe -->
            <div class="producto-info">
                <span class="origen-cafe">Colombia. </span>
                <h2>Colombia.</h2>

                <h3>Notas de cata</h3>
                <ul>
                    <li>Chocolate</li>
                    <li>Caramelo</li>
                    <li>Frutos Rojos</li>
                </ul>

                <label for="tueste-colombia"><strong>Nivel de Tueste:</strong></label>
                <select id="tueste-colombia" name="tueste-colombia">
                    <option value="claro">Tueste claro</option>
                    <option value="medio" selected>Tueste medio</option>
                    <option value="medio-oscuro">Tueste medio-oscuro</option>
                    <option value="oscuro">Tueste oscuro</option>
                </select>

                <strong class="precio-cafe">12,50 €</strong>
            </div>
        </article>
        <!--cafe 2-->
        <article class="producto-cafe">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe2.jpg'); ?>" alt="Café Brasil Cerrado">

            <div class="producto-info">
                <span class="origen-cafe">Brasil</span>
                <h2>Brasil</h2>

                <h3>Notas de Cata</h3>
                <ul>
                    <li>Avellana</li>
                    <li>Chocolate</li>
                    <li>Nueces</li>
                </ul>

                <label for="tueste-brasil"><strong>Nivel de tueste:</strong></label>
                <select id="tueste-brasil" name="tueste-brasil">
                    <option value="claro">Tueste claro</option>
                    <option value="medio" selected>Tueste medio</option>
                    <option value="medio-oscuro">Tueste medio-oscuro</option>
                    <option value="oscuro">Tueste oscuro</option>
                </select>

                <strong class="precio-cafe">11,90 €</strong>
            </div>
        </article>
        <!-- cafe 3 -->
         <article class="producto-cafe">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe3.jpg'); ?>" alt="Café Etiopía Yirgacheffe">

            <div class="producto-info">
                <span class="origen-cafe">Etiopia</span>
                <h2>Etiopia</h2>

                <h3>Notas de cata</h3>
                <ul>
                    <li>Notas florales</li>
                    <li>Cítricos</li>
                    <li>Jazmín</li>
                </ul>
                <label for="tueste-etiopia"><strong>Nivel de Tueste:</strong></label>
                <select id="tueste-etiopia" name="tueste-etiopia">
                    <option value="claro" selected>Tueste claro</option>
                    <option value="medio">Tueste medio</option>
                    <option value="medio-oscuro">Tueste medio-oscuro</option>
                    <option value="oscuro">Tueste oscuro</option>
                </select>

                <strong class="precio-cafe">14,50 €</strong>
            </div>
        </article>
        <!-- cafe 4 -->
         <article class="producto-cafe">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/images/cafe4.jpg'); ?>" alt="Café Guatemala Antigua">

            <div class="producto-info">
                <span class="origen-cafe">Guatemala</span>
                <h2>Guatemala</h2>

                <h3>Notas de cata</h3>
                <ul>
                    <li>Cacao</li>
                    <li>Especias</li>
                    <li>Naranja</li>
                </ul>

                <label for="tueste-guatemala"><strong>Nivel de Tueste:</strong></label>
                <select id="tueste-guatemala" name="tueste-guatemala">
                    <option value="claro">Tueste claro</option>
                    <option value="medio">Tueste medio</option>
                    <option value="medio-socuro">Tueste medio-oscuro</option>
                    <option value="oscuro">Tueste oscuro</option>
                </select>
                    
                    <strong class="precio-cafe">13,20 €</strong>
            </div>

        </article>
    </section>
</main>

<?php get_footer(); ?>






            
    
                    