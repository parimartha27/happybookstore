<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 1; $i<= 50; $i++){
            DB::table('books')->insert([
                'category_id' => rand(1,10),
                'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),

        ]);
        }
    }
}
