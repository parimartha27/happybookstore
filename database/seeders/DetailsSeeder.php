<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Detail;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class DetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for($i= 1; $i<= 200; $i++){
           Detail::create([
                'book_id' => rand(1,50),
                'author' => $faker->name,
                'publisher' => $faker-> firstName,
                'year' => $faker->year($max = 'now'),
                'description' => $faker->text,

        ]);
        }
    }
}
