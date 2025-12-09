<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class FixMigrations extends Command
{
    protected $signature = 'fix:migrations';
    protected $description = 'Fix migrations table';

    public function handle()
    {
        DB::table('migrations')->insertOrIgnore([
            ['migration' => '2025_08_16_060842_create_contacts_table', 'batch' => 2],
            ['migration' => '2025_08_20_081521_create_admins_table', 'batch' => 2],
        ]);

        $this->info('Migrations table fixed!');
    }
}