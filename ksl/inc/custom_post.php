<?php 

function ksl_custom_post(){
    
    register_post_type('slider', array(
    'public' => TRUE,
    'label' => 'slider',
    'labels' => array(
        'name'=>'Slider',
        'singular_name'=>'slider',
        'add_new'=>'Add New'),        
        'supports'=>array('title','editor','thumbnail'),
        
    ));
    
    
    
    register_post_type('product', array(
    'public' => TRUE,
    'label' => 'product',
    'labels' => array(
        'name'=>'Product',
        'singular_name'=>'product',
        'add_new'=>'Add New'),
        'supports'=>array('title','editor','thumbnail')
    ));


    
    register_taxonomy('product','product',array(
        'labels' =>array(
         'name'=>'product category',
         'singular_name' => 'product_category',
         'add_new_item'=>'Add New Item',
         'parent_item_colon'=>'parent_product',
         'parent_item'=>'parent_product',
        'rewrite'=> true
        ), 
    'hierarchical' => true,));
    
    register_post_type('servise', array(
    'public' => TRUE,
    'label' => 'servise',    
    'labels' => array(
        'name'=>'Servise',
        'singular_name'=>'servise',
        'add_new'=>'Add New'
    ), 'supports'=>array('title','editor','excerpt','thumbnail')
    ));
    
    register_post_type('strenth', array(
    'public' => TRUE,
    'label' => 'strenth',    
    'labels' => array(
        'name'=>'Strenth',
        'singular_name'=>'Strenth',
        'add_new'=>'Add New'
    ), 'supports'=>array('title','editor','excerpt','thumbnail')
    ));
}
add_action('init','ksl_custom_post');


function coustom_post_archive($query){
    if($query->is_archive)
        $query->set('post_type', array('product', 'nav_menu_item', 'post'));
    remove_action('pre_get_posts', 'custom_post_archive');
}
add_action('pre_get_posts', 'coustom_post_archive');
?>
