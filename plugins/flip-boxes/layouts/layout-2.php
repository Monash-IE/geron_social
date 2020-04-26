<?php
$layout_html = '';
$layout_html .= '
<div class="'.esc_attr($cols).' cfb-box-'.$i.' cfb-box-wrapper">
    <div data-effect="'.esc_attr($effect).'" data-height="'.esc_attr($height).'" class="cfb-flip">
        <div class="cfb-face cfb-front cfb-data cfb-image">'; 					
                if(!empty($flipbox_image)){
                    $layout_html .= '<img src="'.esc_attr($flipbox_image).'">';
                }
                else 
                {
                    $layout_html .= '<img src="'.CFB_URL . 'assets/images/black-background.jpg">';
                }					
$layout_html .= '</div> 
		<div class="cfb-face cfb-back cfb-data cfb-image" style="background:'.esc_attr($flipbox_color_scheme).'"> 
					<div class="cfb-title">'.esc_html($flipbox_title).'</div>
					<div class="cfb-front-desc">'.$flipbox_label.'</div>
					<div class="cfb-back-desc">'.$flipbox_truncate.'</div>';
                    if($read_more_link!=''){
                        $layout_html .= '<div class="cfb-read-more-link">
					<a target="'.esc_html($dynamic_target).'" href="'.esc_url($flipbox_url).'" style="color:'.esc_attr($flipbox_color_scheme).'">'.esc_html($read_more_link).'</a>
					</div>';
                }
        $layout_html .= '</div>		
     
    </div>
</div>';
        
