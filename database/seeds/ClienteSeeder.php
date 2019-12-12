<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->truncate();
        $faker = Faker::create();

        foreach (range(1,100) as $i)
            \App\Chamado::create([
                'nome' => $faker->name
            ]);
    }
}
