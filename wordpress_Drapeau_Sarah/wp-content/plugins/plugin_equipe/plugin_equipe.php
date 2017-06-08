<?php  

/*Plugin Name: Gestion de l'équipe*/

add_action('init', 'equipe_init');
function equipe_init()
{
	register_post_type(
		
		'equipe',
		array(

			'label' => 'Collaborateurs',
			'labels' => array(
				
				'name' => 'Collaborateurs',
				'singular_name' => 'Collaborateur',
				'all_items' => 'Tous les collaborateurs',
				'add_new_item' => 'Ajouter un collaborateur',
				'edit_item' => 'Editer un collaborateur',
				'new_item' => 'Nouveau collaborateur',
				'view_item' => 'Voir le collaborateur',
				'search_item' => 'Rechercher parmi les collaborateurs',
				'not_found' => 'Pas de collaborateur trouvé',
				'not_found_in_trash' => 'Pas de collaborateur dans la corbeille'
			),
			'public' => true,
			'capability_type' => 'post',
			'supports' => array(

				'title',
				'thumbnail'
			),
			'has_archive' => true,
			'menu-icon' => 'dashicons-groups',

		)
	
	);
}
