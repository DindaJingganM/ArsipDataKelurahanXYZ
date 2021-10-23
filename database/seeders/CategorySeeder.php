<?php

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
        DB::table('category')->insert([
            'nama'=>'Undangan'
            ]);
        DB::table('category')->insert([
            'nama'=>'Pengumuman'
            ]);
        DB::table('category')->insert([
            'nama'=>'Nota Dinas'
            ]);
        DB::table('category')->insert([
            'nama'=>'Pengumuman'
                ]);
    }
}
