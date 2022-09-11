<?php

namespace App\Controllers\Frontend;
use App\Controllers\BaseController;

class Room extends BaseController{

    public function index(){
        echo "GÖT HALİL İBO";
    }

    public function detail(){
        echo "GÖT HALİL İBO DETAY";
        echo base_url();
    }
}
