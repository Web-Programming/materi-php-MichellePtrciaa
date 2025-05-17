<?php

namespace App\Http\Controllers;

use App\Models\Prodi;
use GuzzleHttp\Psr7\Request;

class ProdiController extends Controller{
    public function index(){
        $listprodi = Prodi::get();
        return view( "prodi.index",['listprodi' => $listprodi]);
    }

     public function create(){
        
        return view( "prodi.index");
    }

     public function store(Request $request){
        $validateData = $request -> validate(
            ['nama' => 'required|min:5|max:20',
            'kode_pribadi' => 'required|min:2|max:2']
        );
        $prodi = new Prodi();
        $prodi->nama = $validateData["nama"];
        $prodi->kode_prodi = $validateData['kode_pribadi'];
        $prodi->save();

        return redirect("prodi")->with("status",
        "Data Program Studi Berhasil disimpan");
        
    }
}