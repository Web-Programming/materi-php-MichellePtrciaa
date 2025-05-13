<?php

namespace App\Http\Controllers;

use App\Models\Prodi;

class ProdiController extends Controller{
    public function index(){
        $listprodi = Prodi::get();
        return view( "prodi.index");
    }

     public function create(){
        
        return view( "prodi.index");
    }
}