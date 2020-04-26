<?php
/*
 Plugin Name:Flip Boxes 
 Plugin URI:https://coolplugins.net/
 Description:Use animated Flip Boxes WordPress plugin to highlight your content inside your page in a great way. Use shortcode to add anywhere.
 Version:1.6.2
 License:GPL2
 Author:Cool Plugins
 Author URI:https://coolplugins.net/
 License URI:https://www.gnu.org/licenses/gpl-2.0.html
 Domain Path: /languages 
 Text Domain:c-flipboxes
*/
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
if( !defined( 'CFB_VERSION' ) ) {
    define( 'CFB_VERSION', '1.6.2' );
}
if( !defined( 'CFB_DIR_PATH' ) ) {
	define( 'CFB_DIR_PATH', plugin_dir_path( __FILE__ ) );
}
if( !defined( 'CFB_URL' ) ) {
    define( 'CFB_URL', plugin_dir_url( __FILE__ ));	
}


if( !class_exists( 'CflipBoxes' ) ) 
{
	class CflipBoxes 
	{
		
		/* Initializes the plugin functions*/
		function __construct()  
		{
            if(is_admin()){   
                require_once CFB_DIR_PATH . '/feedback/admin-feedback-form.php';           
            }
			
            
            $this-> cfb_includes();
			add_action('init', array($this,'cfb_register_post_type'));
			add_action( 'cmb2_admin_init', array($this,'cfb_metaboxes'));
			add_action( 'cmb2_admin_init', array($this, 'cfb_settings' ));
			add_shortcode( 'flipboxes',array($this,'cfb_shortcode'));
			add_action( 'wp_enqueue_scripts',array($this,'cfb_register_frontend_assets')); //registers js and css for frontend
            add_action( 'admin_enqueue_scripts',array($this,'cfb_register_frontend_assets'));
            add_action( 'admin_enqueue_scripts',array($this,'cfb_admin_assets'));
            add_filter('manage_edit-flipboxes_columns',array($this, 'cfb_add_custom_columns'));
			add_action('manage_flipboxes_posts_custom_column', array($this, 'cfb_columns_content'), 10, 2 );
			add_action( 'add_meta_boxes',array($this, 'cfb_shortcode_metabox' ));
		}
    
       
        public function cfb_includes(){
            require_once CFB_DIR_PATH . '/includes/cfb-functions.php';
            
            if(is_admin() && cfb_get_post_type_page()=="flipboxes"){
                if ( file_exists( CFB_DIR_PATH . '/CMB2/init.php' ) ) {
                    require_once CFB_DIR_PATH . '/CMB2/init.php';
                    require_once CFB_DIR_PATH . '/CMB2/cmb2-fontawesome-picker.php';
                }
							
			}
            
            require_once CFB_DIR_PATH . '/includes/cfb-feedback-notice.php';
            new cfbFeedbackNotice();
        }

       public function cfb_admin_assets(){
        // Do not execute on post type other than 'flipboxes'
        // Live preview fixes

        $id = get_the_ID();
        if( get_post_type($id) != 'flipboxes' ){
            return;
        }
        $post_status = get_post_status($id);

        // make sure the widget is already published!
        if( $post_status != 'publish' ){
			return;
        }
        $prefix ='_cfb_';
        $bootstrap = get_post_meta( $id, $prefix . 'bootstrap', true );
		$fontawesome= get_post_meta( $id, $prefix . 'font', true );
        cfb_enqueue_scripts($bootstrap,$fontawesome);
    }
   

	/**
         * Activating plugin and adding some info
         */
        public static function activate() {
              update_option("Flip-Boxes-v",CFB_VERSION);
              update_option("Flip-Boxes-type","FREE");
              update_option("Flip-Boxes-installDate",date('Y-m-d h:i:s') );
              update_option("Flip-Boxes-ratingDiv","no");
        }

		// END public static function activate

        /**
         * Deactivate the plugin
         */
        public static function deactivate() {
            // Do nothing
        } 
    
  
		/*Define the metabox and field configurations.*/
		function cfb_settings() 
		{
			// Start with an underscore to hide fields from custom fields list
			$prefix = '_cfb_';
			
			/*Initiate the metabox*/
			$flip = new_cmb2_box( array(
				'id'            => 'side-mt',
				'title'         => __( 'Flipbox Settings', 'cmb2' ),
				'object_types'  => array( 'flipboxes', ), // Post type
				'context'       => 'side',
				'priority'      => 'low',
				'show_names'    => true, // Show field names on the left
			) );

			// Regular text field
			$flip->add_field( array(
				'name'               => __( 'Flipbox layout','cmb2' ),
				'desc'               => __( 'Select Flipbox Layout','cmb2' ),
				'id'                 => $prefix . 'flip_layout',
				'type'               => 'select',
				'show_option_none'   => false,
				'default'            => 'dashed-with-icon',
				'options'            => array(
					'dashed-with-icon'  => __( 'Layout 1 (Dashed With Icon)', 'cmb2' ),
					'with-image'        => __( 'Layout 2 (With Image)', 'cmb2' ),
					'solid-with-icon'   => __( 'Layout 3 (Solid With Icon)', 'cmb2' ),
					'layout-4'   => __( 'Layout 4', 'cmb2' ),
					'layout-5'   => __( 'Layout 5', 'cmb2' ),
					'layout-6'   => __( 'Layout 6', 'cmb2' ),
					'layout-7'   => __( 'Layout 7', 'cmb2' ),
					'layout-8'   => __( 'Layout 8', 'cmb2' ),
					'layout-9'   => __( 'Layout 9', 'cmb2' ),
				),
			) );
	
			$flip->add_field( array(
				'name'             => __( 'Flipbox Effect', 'cmb2' ),
				'desc'             => __( 'Select Flipbox Effect', 'cmb2' ),
				'id'               => $prefix . 'effect',
				'type'             => 'select',
				'show_option_none' => false,
				'default'          => 'left-to-right',
				'options'          => array(
				   'x' => __( 'Bottom To Top', 'cmb2' ),
					'y' => __( 'Left To Right', 'cmb2' ),
				),
            ) );
            
            $flip->add_field( array(
				'name'             => __( 'Read More link in same tab', 'cmb2' ),
				'desc'             => __( 'Check if you want to open Read More link in same tab', 'cmb2' ),
				'id'               => $prefix . 'LinkTarget',
                'type'             => 'checkbox',
			) );
			
			$flip->add_field( array(
				'name'             =>  __( 'Number of columns', 'cmb2' ),
				'desc'             =>  __( 'Select Number of columns', 'cmb2' ),
				'id'               => $prefix . 'column',
				'type'             => 'select',
				'show_option_none' => false,
				'default'          => 'col-md-4',
				'options'          => array(
					'col-md-12'=> __( 'One','cmb2' ),
					'col-md-6' => __( 'Two', 'cmb2' ),
					'col-md-4' => __( 'Three', 'cmb2' ),
					'col-md-3' => __( 'Four', 'cmb2' ),
					'col-md-2' => __( 'Six', 'cmb2' ),
				),
			) );
			  
			$flip->add_field( array(
				'name'             =>  __( 'Height', 'cmb2' ),
				'desc'             =>  __( 'Select height for Flipboxes', 'cmb2' ),
				'id'               => $prefix . 'height',
				'type'             => 'select',
				'show_option_none' => false,
				'default'          => 'default',
				'options'          => array(
					'default'=> __( 'Default(according to content)','cmb2' ),
					'equal' => __( 'Equal height of each Flipbox', 'cmb2' ),
				),
			) );

			$flip->add_field( array(
				'name'       => __( 'Icon Size(in px)', 'cmb2' ),
				'desc'       => __( 'Enter icon size', 'cmb2' ),
				'id'         => $prefix .'icon_size',
				'type'       => 'text',
				'default'    => '52px',
			) );
			
			$flip->add_field( array(
				'name'        => __( 'Skin Color', 'cmb2' ),
				'description' => __( 'Choose a skin color', 'cmb2' ),
				'id'          => $prefix .'skin_color',
				'type'        => 'colorpicker',
				'default'     => '#f4bf64',
			) );
			
			$flip->add_field( array(
				'name'       => __( 'Number of Flipboxes', 'cmb2' ),
				'desc'       => __( 'Enter number of flipboxes to show', 'cmb2' ),
				'id'         => $prefix .'no_of_items',
				'type'       => 'text',
			) );

			$flip->add_field( array(
				'name'    => __( 'Bootstrap', 'cmb2' ),
				'id'      => $prefix . 'bootstrap',
				'default' => 'enable',
				'type'    => 'radio',
				'options' => array(
					'enable' => __( 'Enable Bootstrap', 'cmb2' ),
					'disable' =>__( 'Disable Bootstrap', 'cmb2' ),
				),
			) );
			
			$flip->add_field( array(
				'name'    =>__( 'Fontawesome', 'cmb2' ),
				'id'      => $prefix . 'font',
				'default' => 'enable',
				'type'    => 'radio',
				'options' => array(
					'enable' =>__( 'Enable Fontawesome', 'cmb2' ),
					'disable' =>__( 'Disable Fontawesome', 'cmb2' ),
				),
			) );
		}
		
		function cfb_shortcode_metabox()
		{
			add_meta_box( 'my-meta-box-id', 'Use This Shortcode',array($this,'cfb_shortcode_text'), 'flipboxes', 'side', 'high' );
		}
		
		function cfb_shortcode_text()
		{
			$id = get_the_ID();
			$dynamic_attr='';
			_e("Paste this shortcode in anywhere (page/post)", "c-flipbox");
			$dynamic_attr.="[flipboxes id=\"{$id}\"";
			$dynamic_attr.=']';
			$prefix="_cfb_";
			?>
		<input type="text" class="regular-small" name="my_meta_box_text" id="my_meta_box_text" value="<?php  echo esc_attr ($dynamic_attr);?>" readonly/>
			<?php
		}
		// ADD NEW COLUMN
		function cfb_add_custom_columns($flip_cols) 
		{
			$new_columns['cb']            =  '<input type="checkbox" />';
			$new_columns['title']         =  _x('Title', 'column name');
			$new_columns['flip_layout']   =  _x('Flipbox Layout', 'flipboxes');
			$new_columns['effect']        =  __('Flipbox Effect','flipboxes');
			$new_columns['code']          =  __('Shortcode','flipboxes');
			$new_columns['date']          =  _x('Sort By Date', 'column name');
			return $new_columns;
		}
	
		function cfb_columns_content($flip_cols,$post) 
		{                   
			$prefix="_cfb_";
			// global $layouts;
			$layouts=array(
				'dashed-with-icon'     => __( 'Dashed With Icons', 'cmb2' ),
				'with-image'           => __( 'With Image', 'cmb2' ),
				'solid-with-icon'      => __( 'Solid With Icon', 'cmb2' ),
				'layout-4'  		   => __( 'Layout 4', 'cmb2' ),
				'layout-5'  		   => __( 'Layout 5', 'cmb2' ),
				'layout-6'			   => __( 'Layout 6', 'cmb2' ),
				'layout-7'			   => __( 'Layout 7', 'cmb2' ),
				'layout-8'			   => __( 'Layout 8', 'cmb2' ),
				'layout-9'			   => __( 'Layout 9', 'cmb2' ),
				);
			//global $effects;
			$effects=array(
					'x'   => __( 'Bottom To Top', 'cmb2' ),
					'y'   => __( 'Left To Right', 'cmb2' ),
				);
				
			switch ( $flip_cols ) 
				{
					case "flip_layout":
					$lt = get_post_meta( $post, $prefix . 'flip_layout', true );
					if(isset($layouts[$lt]))
					{
						echo $layouts[$lt];
					}
					break;
					case "effect":
					$eff= get_post_meta( $post, $prefix . 'effect', true );
					if(isset($effects[$eff]))
					{
						echo $effects[$eff];
					}
					break;
					case "code":
					global $dynamic_attr;
					global $id;
					$dynamic_attr="[flipboxes id=\"{$id}\"]";
					echo "<input type='text' value='".$dynamic_attr."'>";
					break;
					default:
				    echo esc_html_e('Not Matched','cfb2');
				  	break;
				}
		}
		function cfb_register_post_type()
		{
			$labels = array(
				'name'                  => _x( 'Flipboxes', 'Post Type General Name'),
				'singular_name'         => _x( 'Flipboxes', 'Post Type Singular Name'),
				'menu_name'             => __( 'Flipboxes'),
				'name_admin_bar'        => __( 'Flipboxes'),
				'archives'              => __( 'Item Archives'),
				'attributes'            => __( 'Item Attributes'),
				'parent_item_colon'     => __( 'Parent Item:'),
				'all_items'             => __( 'All Flipboxes'),
				'add_new_item'          => __( 'Add New Flipbox'),
				'add_new'               => __( 'Add New'),
				'new_item'              => __( 'New Item'),
				'edit_item'             => __( 'Edit Item'),
				'update_item'           => __( 'Update Item'),
				'view_item'             => __( 'View Item'),
				'view_items'            => __( 'View Items'),
				'search_items'          => __( 'Search Item'),
				'not_found'             => __( 'Not found'),
				'not_found_in_trash'    => __( 'Not found in Trash'),
				'featured_image'        => __( 'Featured Image'),
				'set_featured_image'    => __( 'Set featured image'),
				'remove_featured_image' => __( 'Remove featured image'),
				'use_featured_image'    => __( 'Use as featured image'),
				'insert_into_item'      => __( 'Insert into item'),
				'uploaded_to_this_item' => __( 'Uploaded to this item'),
				'items_list'            => __( 'Items list'),
				'items_list_navigation' => __( 'Items list navigation'),
				'filter_items_list'     => __( 'Filter items list'),
				);
			$args = array(
				'label'                 => __( 'Flipboxes'),
				'description'           => __( 'Post Type Description'),
				'labels'                => $labels,
				'supports'              => array('title'),
				'taxonomies'            => array(),
				'hierarchical'          => false,
				'public'                => false,
				'show_ui'               => true,
				'show_in_menu'          => true,
				'menu_position'         => 5,
				'show_in_admin_bar'     => true,
				'show_in_nav_menus'     => true,
				'can_export'            => true,
				'has_archive'           => true,        
				'exclude_from_search'   => false,
				'publicly_queryable'    => false,
				'capability_type'       => 'page',
				);
			register_post_type('flipboxes',$args);
		}

		
       
		/*Define the metabox and field configurations*/
		function cfb_metaboxes()
        {
            // Start with an underscore to hide fields from custom fields list
            $prefix = '_cfb_';
            
            $cmb2 = new_cmb2_box( array(
               'id'            => 'cfb_live_preview',
               'title'         => __( 'Flip Boxes Live Preview', 'cmb2' ),
               'object_types'  => array( 'flipboxes'), // Post type
                'context'       => 'normal',
                'priority'      => 'high',
                'show_names'    => true, // Show field names on the left
                // 'cmb_styles' => false, // false to disable the CMB stylesheet
                // 'closed'     => true, // Keep the metabox closed by default
               ) );

            $cmb2->add_field( array(
                'name' => '',
                	'desc' =>cfb_display_live_preview(),
                	'type' => 'title',
                	'id'   => 'cfb_live_preview'
            ) );
            
            

            /* Initiate the metabox*/
            $flip = new_cmb2_box( array(
                'id'            => 'test_metabox',
                'title'         => __( 'Add Flipboxes', 'cmb2' ),
                'object_types'  => array( 'flipboxes'), // Post type
                'context'       => 'normal',
                'priority'      => 'high',
                'show_names'    => true, // Show field names on the left
            ) );

        
            $group_field_id = $flip->add_field( array(
                'id'          =>$prefix.'flip_repeat_group',
                'type'        => 'group',
                'description' => __( '', 'cmb2' ),
                'options'     => array(
                    'group_title'   => __( 'Flipbox {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
                    'add_button'    => __( 'Add Another Flipbox', 'cmb2' ),
                    'remove_button' => __( 'Remove Flipbox', 'cmb2' ),
                    'sortable'      => true, // beta
                ),
            ) );

            // Id's for group's fields only need to be unique for the group. Prefix is not needed.
            $flip->add_group_field( $group_field_id, array(
                'name' => __('Title','c-flipbox'),
                'description' => __('Enter a title for this Flipbox','c-flipbox'),
                'id'   => 'flipbox_title',
                'type' => 'text',
			) );
            
            $flip->add_group_field( $group_field_id, array(
                'name' => __('Front Description','c-flipbox'),
                'id'   => 'flipbox_label',
                'description' => __('Add Front Description for this Flipbox','c-flipbox'),
                'type' => 'textarea_small',
			) );
            
            $flip->add_group_field( $group_field_id, array(
                'name'        => __('Back Description','c-flipbox'),
                'description' => __('Add Back Description for this Flipbox','c-flipbox'),
                'id'          => 'flipbox_desc',
                'type'        => 'textarea_small',
			) );
			
			$flip->add_group_field( $group_field_id, array(
                'name'        => __( 'Description Length', 'c-flipbox' ),
                'description' => __('Enter number of characters','c-flipbox'),
                'id'          => 'flipbox_desc_length',
                'type'        => 'text',
                'default'     => '75',
            ) );
           
			$flip->add_group_field( $group_field_id, array(
                'name'        => __( 'Select Icon', 'c-flipbox' ),
                'description' => __('Choose an Icon for Flipbox Layout','c-flipbox'),
                'id'          => 'flipbox_icon',
                'type'        => 'fontawesome_icon',
            ) );
            $flip->add_group_field( $group_field_id, array(
                'name'        => __( 'Color Scheme', 'c-flipbox' ),
                'description' => __('Choose Color Scheme','c-flipbox'),
                'id'          => 'color_scheme',
                'type'        => 'colorpicker',
			) );
            
            $flip->add_group_field( $group_field_id, array(
                'name' => __('Image','c-flipbox'),
                'id'   => 'flipbox_image',
                'description' => __('Upload an Image','c-flipbox'),
                'type' => 'file',
            ) );
            
            $flip->add_group_field( $group_field_id, array(
                'name' => __('URL','c-flipbox'),
                'id'   => 'flipbox_url',
                'description' => __('Enter URL for Button','c-flipbox'),
                'type' => 'text_url',
                'protocols' => array('http', 'https'),
            ) );
            
            
            $flip->add_group_field( $group_field_id, array(
                'name' => __('URL Text','c-flipbox'),
                'id'   => 'read_more_link',
                'description' => __('Enter Text For Button','c-flipbox'),
                'type' => 'text',
			) );
        }
		function cfb_register_frontend_assets() 
		{
			wp_register_script( 'flipboxes-layout-js', CFB_URL . 'assets/js/flipboxes-layout.min.js', array('jquery'), CFB_VERSION );
			
			wp_register_style( 'cfb-fontawesome',CFB_URL . 'assets/css/font-awesome.min.css', array(), CFB_VERSION);

			wp_register_style( 'flip-layout-style',CFB_URL . 'assets/css/flipboxes-layout.min.css', array(), CFB_VERSION);
			
			wp_register_style( 'cfb-bootstrap',CFB_URL . 'assets/css/bootstrap.min.css', array(), CFB_VERSION ,'all');
			
			wp_register_script( 'flip-min-js', CFB_URL . 'assets/js/jquery.flip.min.js', array('jquery'), CFB_VERSION );
		    
			
		}
		
		function cfb_shortcode($atts)
		{
            $atts = shortcode_atts(array(
                'id' => '',
            ), $atts, 'ccpw');

			$id = $atts['id'];

        
			$prefix   = "_cfb_";
			$title          = get_the_title($id);
			$flip_layout    = get_post_meta( $id, $prefix . 'flip_layout', true );
			$effect         = get_post_meta( $id, $prefix . 'effect', true );
			$height         = get_post_meta( $id, $prefix . 'height', true );
			$height= $height!=""?$height:'default';

			$iconsize      = get_post_meta( $id, $prefix .'icon_size', true );
			$icon_size=isset($iconsize )&&!empty($iconsize)?$iconsize:"52px";
			$skincolor= get_post_meta( $id, $prefix .'skin_color', true );
			$skincolor=isset($skincolor)&& !empty($skincolor)?$skincolor:"#f4bf64";

			$cols= get_post_meta( $id, $prefix . 'column', true );
			$bootstrap = get_post_meta( $id, $prefix . 'bootstrap', true );
			$fontawesome= get_post_meta( $id, $prefix . 'font', true );
			$noitems = get_post_meta( $id, $prefix . 'no_of_items', true );
			$no_of_items = isset($noitems)&& !empty($noitems)?$noitems:9999;
			$entries = get_post_meta( $id, $prefix .'flip_repeat_group', true );
            
            $LinkTarget = get_post_meta( $id, $prefix .'LinkTarget', true );
            $link_target = isset($LinkTarget)&& !empty($LinkTarget)?$LinkTarget: false;
            $dynamic_target='';
            if($link_target){
                $dynamic_target = '_self';
            }
            else{
                $dynamic_target = '_blank';
            }
            global $post; 
			if(isset($post->post_content) && has_shortcode( $post->post_content, 'flipboxes'))
			{
                cfb_enqueue_scripts($bootstrap,$fontawesome);
					
			}

				
			
				if( is_array( $entries ) && count($entries)>-1 )
				{
					$i=1;
					$flipbox_html = ''; 
					
					$flipbox_html .='<div id="flipbox-widget-'.esc_attr($id).'" class="cfb_wrapper '.esc_attr($flip_layout).'" data-flipboxid="flipbox-widget-'.esc_attr($id).'">';
					foreach ( $entries as $entry ) 
					{

						if($i>$no_of_items){
						break;
						}
						
						$flipbox_title         =isset($entry['flipbox_title'])?$entry ['flipbox_title']:'';
						$flipbox_desc          =isset($entry['flipbox_desc'])?$entry['flipbox_desc']:'';
                        $flipbox_desc_length   =isset($entry['flipbox_desc_length']) && !empty($entry['flipbox_desc_length'])?$entry ['flipbox_desc_length']:'75';
                        $flipbox_truncate      =mb_strimwidth($flipbox_desc ,0,$flipbox_desc_length,"...");
						$single_f_c  		   =isset($entry['color_scheme'])?$entry['color_scheme']:"";
						$flipbox_icon          =isset($entry['flipbox_icon'])?$entry['flipbox_icon']:'';
						$flipbox_image         =isset($entry['flipbox_image'])?$entry['flipbox_image']:'';
				        $flipbox_url           =isset($entry['flipbox_url'])?$entry['flipbox_url']:'';
						$back_desc             =isset($entry['flipbox_label'])?$entry['flipbox_label']:'';
						$flipbox_label         =mb_strimwidth($back_desc ,0,$flipbox_desc_length,"...");
						$read_more_link        =isset($entry['read_more_link'])?$entry['read_more_link']:'';
						
					
					if($single_f_c!==""){
						$flipbox_color_scheme=$single_f_c;
					}else{
						$flipbox_color_scheme=$skincolor;
					}

						if ($flip_layout=="dashed-with-icon"){
							
							require dirname(__FILE__) . '/layouts/layout-1.php';
							
							$flipbox_html .= $layout_html;
						}
						elseif ($flip_layout=="with-image"){
							require(dirname(__FILE__) . '/layouts/layout-2.php');
							$flipbox_html .= $layout_html;
						}
						elseif ($flip_layout=="solid-with-icon"){
							require(dirname(__FILE__) . '/layouts/layout-3.php');
							$flipbox_html .= $layout_html;
						}
						elseif ($flip_layout=="layout-4"){
							require(dirname(__FILE__) . '/layouts/layout-4.php');
							$flipbox_html .= $layout_html;
						} 
						elseif ($flip_layout=="layout-5"){
							require(dirname(__FILE__) . '/layouts/layout-5.php');
							$flipbox_html .= $layout_html;
						} 
						elseif ($flip_layout=="layout-6"){
							require(dirname(__FILE__) . '/layouts/layout-6.php');
							$flipbox_html .= $layout_html;
						} 
						elseif ($flip_layout=="layout-7"){
							require(dirname(__FILE__) . '/layouts/layout-7.php');
							$flipbox_html .= $layout_html;
						} 
						elseif ($flip_layout=="layout-8"){
							require(dirname(__FILE__) . '/layouts/layout-8.php');
							$flipbox_html .= $layout_html;
						} 
						elseif ($flip_layout=="layout-9"){
							require(dirname(__FILE__) . '/layouts/layout-9.php');
							$flipbox_html .= $layout_html;
						} 
						
						
						$i++;	
					}	// end of foreach
					$flipbox_html .='</div>';
					return $flipbox_html;	
				}else{
					return __('No flipbox content added','c-flipboxes');
				}
						
			
		}
		
	}// end class
}
// Installation and uninstallation hooks
    register_activation_hook(__FILE__, array('CflipBoxes', 'activate'));
    register_deactivation_hook(__FILE__, array('CflipBoxes', 'deactivate'));
	
$CflipBoxes_obj = new CflipBoxes(); //initialization of plugin
	