<?php

add_theme_support('post-thumbnails');

function cadastrando_post_type_imoveis(){
$nomeSingular = "Imóvel";
$nomePlural = "Imóveis";
$description = 'Imóveis da imobiliária Temast';
    
$labels = array(
		'name' => 'Imóveis',
		'singular_name' => $nomeSingular,
		'menu_name' => $nomeSingular,
		'name_admin_bar' => $nomeSingular,
		'add_new' => 'Adicionar novo ' . $nomeSingular,
		'add_new_item' => 'Adicionar novo ' . $nomeSingular,
		'new_item' => 'Novo ' . $nomeSingular,
		'edit_item' => 'Editar ' . $nomeSingular,
		'view_item' => 'Visualizar ' . $nomeSingular,
		'all_items' => 'Todos os ' . $nomePlural,
		'search_items' => 'Procurar ' . $nomePlural,
		'parent_item_col' => 'Pagina pai',
		'not_found' => $nomeSingular . ' não encontrado',
		'not_found_in_trash' => 'Sem ' . $nomePlural
	);
    
$supports = array(
    'title',
    'editor',
    'thumbnail'
);

$args = array (
    'public' => true,
    'labels' => $labels,
    'description' => $description,
    'menu_icon' => 'dashicons-admin-home',
    'supports' => $supports
);
register_post_type('imovel', $args);   
}

add_action('init', 'cadastrando_post_type_imoveis');


//CRIANDO MENU NAS PAGINAS
function registrar_menu_navegacao() {
    register_nav_menu('header-menu', 'main-menu');
}
add_action( 'init', 'registrar_menu_navegacao');

//CRIANDO TITULO DOS MENUS
function get_titulo() {
	if( is_home() ) {
		bloginfo('name');
	} else {
		bloginfo('name');
		echo ' | ';
		the_title();
	}
}

//CRIANDO TAXONOMIA
function taxonomia_localizacao(){
    $singular = 'Localização';
    $plural = 'Localizações';
    
    $labels = array(
        'name' => $plural,
        'singular_name' => $singular,
        'view_item' => 'Ver ' . $singular,
        'edit_item' => 'Editar ' . $singular,
        'new_item' => 'Novo ' . $singular,
        'add_new_item' => 'Adicionar novo ' . $singular
    );
    
    $args = array(
        'labels' => $labels,
        'public' => true,
        'hierarchical' => true
    );
    
    register_taxonomy('Localizacao', 'imovel', $args);
}

add_action('init', 'taxonomia_localizacao');