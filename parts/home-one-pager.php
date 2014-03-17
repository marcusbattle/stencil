<?php  
	$locations = get_nav_menu_locations();

	$pages = array();

   	if ( isset( $locations['header-menu'] ) ) {

    	$menu = wp_get_nav_menu_object( $locations['header-menu'] );
      	$menu_items = wp_get_nav_menu_items( $menu->term_id );

      	foreach ( $menu_items as $item ) {

      		if ( $item->type == 'post_type' ) {
      			array_push( $pages, get_post( $item->object_id ) );
      		}

      	}

   	}

?>

<?php foreach( $pages as $page ): ?>
   <div id="<?php echo $page->post_name ?>" class="container">
	   <div class="row">
	      	<?php echo wpautop( $page->post_content ); ?>
	   </div>
   </div>
<?php endforeach; ?>