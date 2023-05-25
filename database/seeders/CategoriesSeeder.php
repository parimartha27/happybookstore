<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   

        $categories = [
            'Fiksi',
            'Non-Fiksi',
            'Sains',
            'Sejarah',
            'Biografi',
            'Bisnis',
            'Pendidikan',
            'Seni dan Desain',
            'Teknologi',
            'Kesehatan'
        ];

       
        //menggunakan model
        for($i = 0; $i <=9; $i++){
            Category::create([
                'category' => $categories[$i]
            ]);
        }
        
        #menggunakan DB

        // for($i = 0; $i <=9; $i++){
        //     DB::table('categories')->insert([
        //         'categoriy' => $category[$i],
        //     ]);
        // }
    }
}
