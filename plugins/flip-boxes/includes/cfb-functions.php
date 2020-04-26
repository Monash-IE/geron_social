<?php 
function cfb_enqueue_scripts($bootstrap,$fontawesome){
    
    wp_enqueue_style( 'flip-layout-style');	
    wp_enqueue_script( 'flipboxes-layout-js');
    wp_enqueue_script( 'flip-min-js');
    
    if ($bootstrap=='enable')
        {
            wp_enqueue_style( 'cfb-bootstrap');
        }
    if ($fontawesome=='enable')
        {
            wp_enqueue_style( 'cfb-fontawesome');
        }
}

function cfb_display_live_preview(){
    $output='';

    if( isset($_REQUEST['post']) && !is_array($_REQUEST['post'])){
    $id = $_REQUEST['post'];
    $type = get_post_meta($id, 'type', true);
        $output='<p><strong class="micon-info-circled"></strong>Backend preview may be a little bit different from frontend / actual view. Add this shortcode on any page for frontend view - <code>[flipboxes id='.$id.']</code></p>'.do_shortcode("[flipboxes id='".$id."']");
        
     return $output;
    }else{
    return  $output='<h4><strong class="micon-info-circled"></strong> Publish to preview the Flip Boxes.</h4>';
    
        }
}

/*
	check admin side post type page
*/
function cfb_get_post_type_page() {
    global $post, $typenow, $current_screen;
    
    if ( $post && $post->post_type ){
        return $post->post_type;
    }elseif( $typenow ){
        return $typenow;
    }elseif( $current_screen && $current_screen->post_type ){
        return $current_screen->post_type;
    }
    elseif( isset( $_REQUEST['post_type'] ) ){
        return sanitize_key( $_REQUEST['post_type'] );
    }
    elseif ( isset( $_REQUEST['post'] ) ) {
    return get_post_type( $_REQUEST['post'] );
    }
    return null;
}