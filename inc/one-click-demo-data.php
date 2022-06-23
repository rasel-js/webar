<?php
function webar_import_files() {
    return [
      [
        'import_file_name'           => 'Demo Import',
        'categories'                 => [ 'Category' ],
        'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/content.xml',
        'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/widget.wie',
        
       
        'import_preview_image_url'   => 'http://www.your_domain.com/ocdi/preview_import_image1.jpg',
        'preview_url'                => 'http://www.your_domain.com/my-demo-1',
      ],
    
    ];
  }
  add_filter( 'ocdi/import_files', 'webar_import_files' );



//Menu assign
  function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $primary_menu = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary_menu' => $primary_menu->term_id,
            'footer_menu' => $footer_menu->term_id,
            
            // replace 'main-menu' here with the menu location identifier from register_nav_menu() function
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'ocdi/after_import', 'ocdi_after_import_setup' );
  
