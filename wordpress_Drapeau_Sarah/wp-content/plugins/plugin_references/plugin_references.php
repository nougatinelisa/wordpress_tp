<?php  

/*Plugin Name: Gestion des références*/

add_action('init', 'reference_init');
function reference_init()
{
	register_post_type(
		
		'reference',
		array(

			'label' => 'Références',
			'labels' => array(
				
				'name' => 'Références',
				'singular_name' => 'Référence',
				'all_items' => 'Toutes les références',
				'add_new_item' => 'Ajouter une référence',
				'edit_item' => 'Editer une référence',
				'new_item' => 'Nouvelle référence',
				'view_item' => 'Voir la référence',
				'search_item' => 'Rechercher parmi les références',
				'not_found' => 'Pas de référence trouvée',
				'not_found_in_trash' => 'Pas de référence dans la corbeille'
			),
			'public' => true,
			'capability_type' => 'post',
			'supports' => array(

				'title',
				'thumbnail'
			),
			'has_archive' => true,
			'menu-icon' => 'dashicons-awards',

		)
	
	);
}
