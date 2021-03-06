<?php


	register_sidebar(array(
	'name'=>'main_sidebar',
	'description' => __('The main sidebar for the theme.', TDOMAIN), 
	    'before_widget' => '<div id="%1$s" class="%2$s widget"><div class="winner">',
	    'after_widget' => '&nbsp;</div></div>',
	    'before_title' => '<h3 class="wtitle">',
	    'after_title' => '&nbsp;</h3>'
	));



if(VPRO == 1) { get_template_part('pro/sidebars_pro'); }

function pagelines_register_menus(){
	
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', TDOMAIN ),
		'footer_nav' => __( 'Footer Navigation', TDOMAIN ),
		'footer_social' => __( 'Footer Social Links', TDOMAIN ),
	) );
}
add_action( 'init', 'pagelines_register_menus' );


?>