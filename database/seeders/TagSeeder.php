<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::upsert([
            ['slug'=>'client_works',   'name'=>'Client Works'],
            ['slug'=>'personal_works', 'name'=>'Personal Works'],
            ['slug'=>'concept_projects','name'=>'Concept Projects'],
        ], ['slug'], ['name']);
    }
}
