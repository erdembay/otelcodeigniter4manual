<?php

namespace App\Controllers\Backend;
use App\Controllers\BaseController;

class Auth extends BaseController{

    public function login(){
        echo "giriş";
        return redirect()->to(base_url('admin/dashboard'));
    }
    public function logout(){
        echo "çıkış";
    }
}
