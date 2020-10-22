<?php
/*
Plugin Name: Modifica etiqueta generator
Plugin URI: https://www.jamzonline.net/BLOG
Description: Modifica etiqueta generator
Version: 1.0
Author: Jimmy Cantor
Author URI: https://www.jamzonline.net/BLOG
License: GPLv2
*/

add_filter( 'the_generator', 'remove_generator', 10, 1 );

function remove_generator ( $html  ) {
  return  preg_replace( '|content=("WordPress.*?")|',
                        'content="Codigo ROJO"', $html );
}