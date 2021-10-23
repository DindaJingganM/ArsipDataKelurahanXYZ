<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
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
    'nama'=>'Undangan'
    ]);
    Category::create([
    'nama'=>'Pengumuman'
    ]);
    Category::create([
    'nama'=>'Nota Dinas'
    ]);
    Category::create([
    'nama'=>'Pengumuman'
        ]);
    }
}
