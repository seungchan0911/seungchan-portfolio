<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('tags')->insert([
            [ 'name' => 'Laravel', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'PHP', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'JavaScript', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'Vue.js', 'created_at' => now(), 'updated_at' => now() ],
            [ 'name' => 'React', 'created_at' => now(), 'updated_at' => now() ],
        ]);
    }
}