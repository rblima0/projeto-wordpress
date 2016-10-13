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