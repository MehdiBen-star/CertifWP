<?php 
/*
 Plugin Name: Mehdi Simplon
 Description: Un simple plugin permettant d'ajouter un lien vers le produit décrit dans l'article.
 Version: 1.0
 Author: Mehdi Benabdesselam
 License: GPL2
 License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

 add_shortcode('wop', 'wop_shortcode');

 if (!function_exists('wop_shortcode')) {
 	function wop_shortcode() {
    $text = '<div class="plugin_wop">';
    $text .= '<p class="plugin_text_cta">';
    $text .= 'Que l\'on choisisse les toilettes sèches avec sciure de bois ou les toilettes à séparation, un point commun :';
    $text .= '<br/>';
    $text .= 'LA NON-UTILISATION DE L\'EAU.';
    $text .= '<br/>';
    $text .= 'L\'utilisation d’eau pour les toilettes est souvent considérée comme un non-sens écologique !';
    $text .= '<a href="#" style="text-decoration:none" class="wop_cta">La toilette sèche à séparation</a>';
    $text .= '</p>';
    $text .='</div>';
             
 	 return $text;
 	}
 }