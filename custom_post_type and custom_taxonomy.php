/*****************Register Custom post Type******************/


function create_post_type(){
	register_post_type('portfolio',array(
		'labels'=> array(
			'name'=>__('Portfolio'),
			'singular_name'=>__('Portfolio'),
			'add_new'=>__('Add New'),
			'add_new_item'=>__('Add New Portfolio'),
			'edit_item'=>__('Edit Portfolio'),
			'new_item'=>__('New Portfolio'),
			'view_item'=>__('view Portfolio'),
			'not_found'=>__('Sorry, We couldn\'t find the Portfolio you are looking for')
		),
		'public'=>true,
		'publicly_queryable'=>true,
		'exclude_from_search'=>true,
		'menu_position'=>14,
		'has_archive'=>false,
		'hierarchical'=>true,
		'capability_type'=>'page',
		'rewrite'=>array('slug'=>'portfolio'),
		'support'=>array('title', 'custom-fields', 'thumbnail', 'editor')
	
	));

}

add_action('init', 'create_post_type');

function custom_taxonomy(){
	register_taxonomy('portfolio_cat','portfolio',array(
		'hierarchical'=>true,
		'label'=>'Portfolio Cat',
		'query_var'=>true,
		'has_archive'=>true,
		'rewrite'=>array('slug'=>'portfolio_cat')
	));

}

add_action('init','custom_taxonomy');