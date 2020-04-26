<?php
$layout_html = '';
$layout_html .= '
<div class="'.esc_attr($cols).' cfb-box-'.$i.' cfb-box-wrapper">
    <div data-effect="'.esc_attr($effect).'" data-height="'.esc_attr($height).'" class="cfb-flip">
        <div class="cfb-face cfb-front cfb-data" style="border-color:'.esc_attr($flipbox_color_scheme).'"> 
		    
                <div class="cfb-icon" style="color:'.esc_attr($flipbox_color_scheme).'">
                    <i class="fa '.esc_attr($flipbox_icon).'" style="font-size:'.esc_attr($icon_size).'!important"></i>
                </div>			  
			  <div class="cfb-title" style="color:'.esc_attr($flipbox_color_scheme).'">'. esc_html($flipbox_title).'</div>
			  <div class="cfb-front-desc" style="color:'.esc_attr($flipbox_color_scheme).'">'.$flipbox_label.'</div>
			
		</div> 		
		<div class="cfb-face cfb-back cfb-data" style="border-color:'.esc_attr($flipbox_color_scheme).'"> 
		    
                <div class="cfb-back-desc" style="color:'.esc_attr($flipbox_color_scheme).'">'.$flipbox_truncate.'</div>';
                if($read_more_link!=''){
                    $layout_html .= '<div class="cfb-read-more-link">
				        <a target="'.esc_html($dynamic_target).'" style="color:'.esc_attr($flipbox_color_scheme).'" href="'.esc_url($flipbox_url).'">'.esc_html($read_more_link).'</a>
			        </div>';
                }
        $layout_html .= '</div>		    
        
    </div>
</div>';