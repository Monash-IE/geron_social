<?php
$layout_html = '';
$layout_html .= '<div class="'.esc_attr($cols).' cfb-box-'.$i.' cfb-box-wrapper">
    <div data-effect="'.esc_attr($effect).'" data-height="'.esc_attr($height).'" class="cfb-flip">
        <div class="cfb-face cfb-front cfb-data" style="box-shadow: 0 0 0 4px #fff, 0 0 0 6px '.esc_attr($flipbox_color_scheme).';background:'.esc_attr($flipbox_color_scheme).'">
                                         
                <div class="cfb-image">'; 
                    if(!empty($flipbox_image)){
                        $layout_html .= '<img class="img-responsive" src="'.esc_attr($flipbox_image).'">';
                    }
                    else 
                    {
                        $layout_html .= '<img class="img-responsive" src="'.CFB_URL . 'assets/images'.'/layout-4.png">';
                    }
                    if($flipbox_icon!='')
                    {
                    $layout_html .= '
                    <div class="cfb-icon-img" style="font-size:'.esc_attr($icon_size).'; color:'.esc_attr($flipbox_color_scheme).';border-color:'.esc_attr($flipbox_color_scheme).'">
                        <i class="fa '.esc_attr($flipbox_icon).'"></i>
                    </div>';
                    }
                $layout_html .='</div>    
                <div class="cfb-title">'.esc_html($flipbox_title).'</div>                
            
        </div>
        <div class="cfb-face cfb-back cfb-data" style="box-shadow: 0 0 0 4px #fff, 0 0 0 6px '.esc_attr($flipbox_color_scheme).';background:'.esc_attr($flipbox_color_scheme).'"> 
                                 
                <div class="cfb-back-desc">'.$flipbox_truncate.'</div>';
                if($read_more_link!=''){
                    $layout_html .= '<div class="cfb-read-more-link">
                        <a target="'.esc_html($dynamic_target).'" href="'.esc_url($flipbox_url).'" style="color:'.esc_attr($flipbox_color_scheme).'">'.esc_html($read_more_link).'</a>
                    </div>';
                }
        $layout_html .= '</div>
        
    </div>
</div>';
		