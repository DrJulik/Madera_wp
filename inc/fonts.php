<?
function madera_add_google_fonts() {
 
 wp_enqueue_style( 'madera-google-fonts', 'https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,600|Quicksand&display=swap', false ); 
 }
  
 add_action( 'wp_enqueue_scripts', 'madera_add_google_fonts' );
 ?>