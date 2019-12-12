<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ChamadoSeeder extends Seeder
{
    public function run()
    {
        DB::table('chamados')->truncate();
        $faker = Faker::create();
        $clientes = \App\Cliente::all();

        foreach (range(1,50) as $i)
            \App\Chamado::create([
                'titulo' => $faker->sentence,
                'data' => $faker->date('Y-m-d','2020-12-31'),
                'id_cliente' => $clientes->random()->id,
                'descricao' => $faker->sentence()
            ]);
    }
}
