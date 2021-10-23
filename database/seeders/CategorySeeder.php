<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'kategori'=> "Undangan"
        ]);

        Category::create([
            'kategori'=> "Pengumuman"
        ]);
        
        Category::create([
            'kategori'=> "Nota Dinas"
        ]);

        Category::create([
            'kategori'=> "Pemberitahuan"
        ]);
    }
}
