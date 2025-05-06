<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents; berfungsi untuk menanam/menginisialisasi 
use DB;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       //menggunakan query builder yg berfungsi untuk menjalankan query class database dari laravel
       //panggil classnya
    //    DB::table("users")->insert([
    //         'name' => 'misel',
    //         'email' => 'misel@gmail.com',
    //         'password' => Hash::make("password")
    //    ]);

       DB::table("users")
        ->where("id", 1)
        ->update([
            'password' => Hash::make("123456")
        ]);

        //DB::table("users")->where("id",">",1)->delete();
    }
}
