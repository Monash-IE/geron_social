<?php
$layout_html = '';
if($flipbox_image){
    $flipbox_image = $flipbox_image;
}
else 
{
    $flipbox_image = ''.CFB_URL.'assets/images/black-background.jpg';
}
$layout_html .= '
<div class="'.esc_attr($cols).' cfb-box-'.$i.' cfb-box-wrapper">
    <div data-effect="'.esc_attr($effect).'" data-height="'.esc_attr($height).'" class="cfb-flip">

        <div class="cfb-face cfb-front cfb-data" style="background:'.esc_attr($flipbox_color_scheme).'"> 
           <div class="cfb-title">'.esc_html($flipbox_title).'</div>
            <div class="cfb-line"></div>
            <div class="cfb-front-desc">'.$flipbox_label.'</div>            
        </div>
		
        <div class="cfb-face cfb-back cfb-data" style="background:linear-gradient(rgba(255, 255, 255, 0.24), rgba(255, 255, 255, 0.24)), url('.esc_attr($flipbox_image).')">
            <div class="cfb-inner-section" style="color:'.esc_attr($flipbox_color_scheme).'">';
         
                    if($flipbox_icon!=''){
                        $layout_html .= '<div class="cfb-icon-img" style="font-size:'.esc_attr($icon_size).'!important">
                            <i class="fa '.esc_attr($flipbox_icon).'"></i>
                        </div>';
                    }
                    $layout_html .= '<div class="cfb-back-desc">'.$flipbox_truncate.'</div>';
                    if($read_more_link!=''){
                        $layout_html .= '<div class="cfb-read-more-link">
                            <a target="'.esc_html($dynamic_target).'" href="'.esc_url($flipbox_url).'" style="color:'.esc_attr($flipbox_color_scheme).'">'.esc_html($read_more_link).'</a>
                        </div>';
                    }
                $layout_html .= '
            </div>
        </div>

    </div>
</div>';
