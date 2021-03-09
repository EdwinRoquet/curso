<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $valorAleatorio = uniqid();
      $valorAleatorio2 = uniqid();
      $slug1 = Str::of('Edwin Roquet')->slug("-")->limit(255 - mb_strlen($valorAleatorio) - 1, "")->trim("-")->append("-", $valorAleatorio);
      $slug2 = Str::of('Josias Roquet')->slug("-")->limit(255 - mb_strlen($valorAleatorio2) - 1, "")->trim("-")->append("-", $valorAleatorio2);


        DB::table('users')->insert([
            'name'=> 'Edwin Roquet',
            'slug' => $slug1 ,
            'email'=> 'correo@correo.com',
            'email_verified_at'=> Carbon::now(),
            'password' => Hash::make('12345678'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
         ]);

        DB::table('users')->insert([
            'name'=> 'Josias Roquet',
            'slug' => $slug2,
            'email'=> 'correo2@correo.com',
            'email_verified_at'=> Carbon::now(),
            'password' => Hash::make('12345678'),
            'created_at'=> Carbon::now(),
            'updated_at'=> Carbon::now(),
         ]);
    }
}
