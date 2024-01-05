<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\People;


class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        foreach (range(0, 199) as $index) {
           People::create([
                'name' => $faker->firstName,
                'lastname' => $faker->lastName,
                'nr_phone'  => $faker->phoneNumber,
            ]);
        }
    }
}

?>