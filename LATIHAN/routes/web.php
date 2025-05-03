<?php

use App\Http\Controllers\ProdiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view(
        'beranda',
        data: [
            'name' => 'Misel',
            'email' => 'miselptrciaa@gmail.com',
            'alamat' => 'sako'
        ]
    );
});

Route::get('/berita/{id}/{judul?}', function ($id, $judul = null) {
    return view(
        'berita',
        data: ['id' => $id, 'judul' => $judul]
    );
});

// membuat route ke halaman prodi index melalui controller ProdiController
Route::get('/prodi/index',[ProdiController::class,'index']);
