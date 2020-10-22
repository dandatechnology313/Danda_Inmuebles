<?php
/*
Plugin Name: wp adsense
Plugin URI: https://www.codigonaranja.com
Description: Agrega un anuncio al final de cada post
Version: 1.0
Author: Jimmy Cantor
Author URI: https://www.codigonaranja.com
License: GPLv2
*/

//Crear un filtro para modificar el contenido del articulo....
add_filter( 'the_content', 'cn_agregar_anuncio' );

function cn_agregar_anuncio ( $the_content ) {

    //Creamos una variable que contenga todo el contenido
    //del articulo
    $articulo = $the_content;

    // Al final del articulo agregar el codigo del anuncio....
    if (is_single() && is_main_query() && in_the_loop()) {
    	$articulo .= '<div class="ads"> *** Hello Fuck World *** </div>';
    }
    
    // siempre debe regresar el contenido que se desea mostrar
    return $articulo;
}