<?php
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


$faker = Faker::create('es_ES');
        for ($i = 0; $i < 50; $i++) {
             DB::table('personas')->insert(array(
                'nombre' => $faker->firstNameFemale,
                'apellido'  => $faker->lastName,
                'dni'   => $faker->unique()->randomNumber(8),
                'celular' => $faker->numerify('03446 - ### ###' ),
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s'),
            ));
        }

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
    }
}
