<?php 

//modifier l'affichage de base du titre
add_filter( 'document_title_parts', function($title_parts_array) {
    $title_parts_array['tagline'] = "un test"; //ajoute un append au title
    return $title_parts_array;
});