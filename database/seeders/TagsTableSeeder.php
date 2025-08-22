<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Project;
use App\Models\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $map = [
            // 'povoko studio' => 'client_works',
            // 'cactus curry club' => 'client_works',
            // 'columnfort' => 'personal_works',
            // 'enforce sword game' => 'concept_projects',
            'frame24' => 'personal_works',
        ];
        foreach ($map as $projectTitle => $tagSlug) {
            $project = Project::where('title', $projectTitle)->first();
            $tag = Tag::where('slug', $tagSlug)->first();
            if ($project && $tag) {
                $project->tags()->syncWithoutDetaching([$tag->id]);
            }
        }
    }
}
