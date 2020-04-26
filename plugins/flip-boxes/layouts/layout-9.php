<?php
$layout_html = '';
$layout_html .= '
<div class="'.esc_attr($cols).' cfb-box-'.$i.' cfb-box-wrapper">
    <div data-effect="'.esc_attr($effect).'" data-height="'.esc_attr($height).'" class="cfb-flip">
        <div class="cfb-face cfb-front cfb-data" style="background:'.esc_attr($flipbox_color_scheme).'"> 
            <div class="cfb-icon-img" style="font-size:'.esc_attr($icon_size).'">';
                if($flipbox_icon!=''){
                    $layout_html .= '<i class="fa '.esc_attr($flipbox_icon).'"></i>';
                }
                $layout_html .= '</div>
        </div>
        <div class="cfb-face cfb-back cfb-data" style="color:'.esc_attr($flipbox_color_scheme).'">
            <a target="'.esc_html($dynamic_target).'" href="'.esc_url($flipbox_url).'">
                <div class="cfb-icon-img"  style="font-size:'.esc_attr($icon_size).';color:'.esc_attr($flipbox_color_scheme).'">';
                    if($flipbox_icon!=''){
                        $layout_html .= ' <i class="fa '.esc_attr($flipbox_icon).'"></i>';
                    }
                $layout_html .= '</div>
            </a>                
        </div>
    </div>
</div>';
