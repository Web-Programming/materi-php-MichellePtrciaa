<?php

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
