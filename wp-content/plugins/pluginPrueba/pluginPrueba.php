<?php 
/* 
  Plugin name: Prueba_Wordpress
  Plugin URI: www.jamzonline.net/BLOG
  Description: Short Code para inlcuir barra de redes sociales
  Author: Jimmy Cantor
  Version: 1.0
  Author URI: www.jamzonline.net/BLOG
  License: GPLv2
 */

add_action( 'wp_head', 'agregar_ga' );

function agregar_ga() {
    echo "
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
        i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
        a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
        m.parentNode.insertBefore(a,m)})(window,document,'script',
        'https://www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-0000000-1', 'auto');
        ga('send', 'pageview');
    </script>";
 }

 ?>