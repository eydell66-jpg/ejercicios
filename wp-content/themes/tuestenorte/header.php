<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <header class="cabecera">
        <div class="contenedor-header">
            <!-- Logo -->
             <div class="logo">
                <a href="<?php echo esc_url( home_url('/')); ?>">
                    TUESTE <span>NORTE</span>
                </a>
                <p>Café - Origen - Experiencia</p>
            </div>

            <!-- Menú de Navegación -->
             <nav class="navegacion">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu principal',
                        'container'      => false,
                        'menu_class'     => 'menu-principal',
                        'fallback_cb'    => 'wp_page_menu',
                        'show_home'      => true

                    ));
                    ?>
                </nav>
        </div>
    </header>
    
</body>
</html>