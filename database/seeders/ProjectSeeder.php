<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('project_tags')->truncate();
        Project::truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        Project::insert([
            ['title'=>'povoko studio','image_path'=>'img/source/povoko-studio.png','link_url'=>'http://www.povokostudio.com','published_at'=>'2025-09-11'],
            ['title'=>'cactus curry club','image_path'=>'img/source/cactus-curry-club.png','link_url'=>'http://cactus-curry-club.vercel.app','published_at'=>'2025-05-10.'],
            ['title'=>'columnfort','image_path'=>'img/source/columnfort.png','link_url'=>'','published_at'=>'2025-06-20'],
            ['title'=>'enforce sword game','image_path'=>'img/source/enforce-sword-game.png','link_url'=>'https://enforce-sword-game.vercel.app/','published_at'=>'2025-04-25'],
            ['title'=>'I\'ll fill it up soon','image_path'=>'img/source/sample-image.png','link_url'=>'','published_at'=>null],
            ['title'=>'frame24','image_path'=>'img/source/frame24.png','link_url'=>'http://frame24.laravel.cloud','published_at'=>'2025-07-05'],
        ]);

        $this->call(TagsTableSeeder::class);
    }
}
