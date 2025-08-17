<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TagsTableSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['Laravel', 'PHP', 'JavaScript', 'Vue.js', 'React'];

        $rows = collect($names)->map(fn ($name) => [
            'name'       => $name,
            'slug'       => Str::slug($name),   // ← slug 추가
            'created_at' => now(),
            'updated_at' => now(),
        ])->all();

        // 중복 실행해도 slug 기준으로 갱신되게 하고 싶으면 upsert 사용
        DB::table('tags')->upsert($rows, ['slug'], ['name','updated_at']);
        // 단순 삽입만 원하면 위 upsert 대신: DB::table('tags')->insert($rows);
    }
}