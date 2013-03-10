<?php

add_action('init',function(){
    
    register_post_type( 'bbank_hospital',
            array(
                'labels' => array(
                        'name'               => __('Hospitals'                   ,'bbank'),
                        'singular_name'      => __('Hospital'                    ,'bbank'),
                        'add_new'            => __('Add Hospital'                ,'bbank'),
                        'all_items'          => __('Hospitals'                   ,'bbank'),
                        'add_new_item'       => __('Add New Hospital'            ,'bbank'),
                        'edit_item'          => __('Edit Hospital'               ,'bbank'),
                        'new_item'           => __('New Hospitals'               ,'bbank'),
                        'view_item'          => __('View Hospitals'              ,'bbank'),
                        'search_items'       => __('Search Hospitals'            ,'bbank'),
                        'not_found'          => __('No Hospital found'           ,'bbank'),
                        'not_found_in_trash' => __('No Hospitals found in Trash' ,'bbank'),
                        ),
                'show_in_menu'       => true,
                'public'             => true,
                'publicly_queryable' => true,
                'has_archive'        => true,
                'rewrite'            => array('slug'=>'job','with_front' => false),
                'supports'           => array('title','editor','author','custom-fields'),
            )
    );
    
    register_post_type( 'bbank_bloodbank',
            array(
                'labels' => array(
                        'name'               => __('Bloodbanks'                   ,'bbank'),
                        'singular_name'      => __('Bloodbank'                    ,'bbank'),
                        'add_new'            => __('Add Bloodbank'                ,'bbank'),
                        'all_items'          => __('Bloodbanks'                   ,'bbank'),
                        'add_new_item'       => __('Add New '           ,'bbank'),
                        'edit_item'          => __('Edit Vehicles'              ,'bbank'),
                        'new_item'           => __('New Vehicles'               ,'bbank'),
                        'view_item'          => __('View Vehicles'              ,'bbank'),
                        'search_items'       => __('Search Vehicles'            ,'bbank'),
                        'not_found'          => __('No Vehicles found'          ,'bbank'),
                        'not_found_in_trash' => __('No Vehicles found in Trash' ,'bbank'),
                        ),
                'show_in_menu'       => true,
                'public'             => true,
                'publicly_queryable' => true,
                'has_archive'        => true,
                'rewrite'            => array('slug'=>'vehicles','with_front' => false),
                'supports'           => array('title','editor','thumbnail','author','custom-fields',),
            )
    );

});