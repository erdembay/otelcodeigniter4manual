<?php
namespace App\Libraries;
class ViewFrontendComponents{
    public function getSliderView(){
        $data = [
            'images' => [
                [
                    'image_path' => 'assets/images/slider/img-5.jpg',
                    'image_data_bg_position' => 'left center',
                    'image_data_bg_position_end' => 'right center',
                    'image_data_duration' => '14000',
                    'icon' => true,
                    'icon_path' => 'assets/images/slider/hom1-slide1.png',
                    'icon_data_x' => 'center',
                    'icon_data_y' => '100',
                    'icon_data_speed' => '700',
                    'icon_data_start' => '1500',
                    'icon_data_easing' => 'easeOutBack',
                    'subtitle' => true,
                    'subtitle_data_x' => 'center',
                    'subtitle_data_y' => '240',
                    'subtitle_data_speed' => '700',
                    'subtitle_data_start' => '1500',
                    'subtitle_data_easing' => 'easeOutBack',
                    'subtitle_content' => 'deneme altbaşlık',
                    'title' => true,
                    'title_data_x' => 'center',
                    'title_data_y' => '280',
                    'title_data_speed' => '700',
                    'title_data_start' => '2000',
                    'title_data_easing' => 'easeOutBack',
                    'title_content' => 'Deneme Başlık',
                    'link' => true,
                    'link_data_x' => 'center',
                    'link_data_y' => '380',
                    'link_data_speed' => '700',
                    'link_data_start' => '2200',
                    'link_data_easing' => 'easeOutBack',
                    'link_content' => 'İletişim',
                    'link_href' => 'contact'
                ],
                [
                    'image_path' => 'assets/images/slider/img-4.jpg',
                    'image_data_bg_position' => 'left center',
                    'image_data_bg_position_end' => 'right center',
                    'image_data_duration' => '14000',
                    'icon' => true,
                    'icon_path' => 'assets/images/slider/hom1-slide1.png',
                    'icon_data_x' => 'center',
                    'icon_data_y' => '100',
                    'icon_data_speed' => '700',
                    'icon_data_start' => '1500',
                    'icon_data_easing' => 'easeOutBack',
                    'subtitle' => true,
                    'subtitle_data_x' => 'center',
                    'subtitle_data_y' => '240',
                    'subtitle_data_speed' => '700',
                    'subtitle_data_start' => '1500',
                    'subtitle_data_easing' => 'easeOutBack',
                    'subtitle_content' => 'deneme altbaşlık 2',
                    'title' => true,
                    'title_data_x' => 'center',
                    'title_data_y' => '280',
                    'title_data_speed' => '700',
                    'title_data_start' => '2000',
                    'title_data_easing' => 'easeOutBack',
                    'title_content' => 'Deneme Başlık 2',
                    'link' => false,
                    'link_data_x' => 'center',
                    'link_data_y' => '380',
                    'link_data_speed' => '700',
                    'link_data_start' => '2200',
                    'link_data_easing' => 'easeOutBack',
                    'link_content' => 'İletişim',
                    'link_href' => 'contact'
                ]
            ]
        ];
        $cache = [
            'cache' => 60,
            'cache_name' => 'home_page_slider'
        ];
        return view('frontend/components/slider_data' , $data, $cache);
    }
}