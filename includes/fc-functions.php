<?php
/*
 * Añadimos un nuevo menú en la wp-admin
 */
// Hook para lanzar la función de agregar menu en 'admin_menu' '
add_action('admin_menu', 'fc_agregar_link_admin');

function fc_agregar_link_admin()
{
    add_menu_page(
        'plugin frases célebres', // Title (tag html) de la página que añadimos
        'Frases célebres', // Texto para mostrar en el link del menu
        'manage_options', // Permisos para ver el link
        plugin_dir_path(__FILE__) . '/fc-page-admin.php' // The 'slug' - file to display when clicking the link
    );
}
/*
 * Frase aleatoria a mostrar
 */
function frases_celebres()
{
    include  'array-frases.php';
    // saber el número de elementos que tiene
    $num_frases = count($frases_celebres) - 1;
    // generar un número aleatorio entre el 0 y el numero total del array -1
    $aleatorio = rand(0, $num_frases);
    //imprimir el array por pantalla
    return "<p class='frases-celebres'>$frases_celebres[$aleatorio]</p>";
}

// añadimos un shortcode para mostrarlo en una entrada o página
// Parámetros: primero shortcode y segundo:función
//add_shortcode( 'shortcode_name', 'shortcode_handler_function' );
add_shortcode('frases_celebres', 'frases_celebres');
