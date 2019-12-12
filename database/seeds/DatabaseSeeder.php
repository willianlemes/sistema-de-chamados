<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
         $this->call(UsuarioSeeder::class);
         //DB::table('chamados')->truncate();
         //$this->call(ClienteSeeder::class);
         $this->call(ChamadoSeeder::class);
    }
}
