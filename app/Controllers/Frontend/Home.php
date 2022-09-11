<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class Home extends BaseController{

    public function index(){
        $data = [
            'title' => 'Anasayfa',
            'slider' => true,
            'baslik' => 'BAŞLIK',
            'yazi' => 'Lorem ipsum dolorsit amet.',
            'zaman' => time()
        ];
        $cache = [
            'cache' => 1,
            'cache_name' => 'home_page_index'
        ];
        return view('frontend/index.php', $data, $cache);
    }
}
