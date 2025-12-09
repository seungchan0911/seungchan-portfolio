<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class RefreshAdminsTable extends Command
{
    protected $signature = 'refresh:admins';
    protected $description = 'Refresh admins table structure';

    public function handle()
    {
        // 1단계: 테이블 삭제
        $this->info('🗑️  Admins 테이블 삭제 중...');
        Schema::dropIfExists('admins');
        $this->info('✓ Admins 테이블이 삭제되었습니다.');

        // 2단계: 마이그레이션 기록 삭제
        $this->info('📝 마이그레이션 기록 삭제 중...');
        DB::table('migrations')
            ->where('migration', '2025_08_20_081521_create_admins_table')
            ->delete();
        $this->info('✓ 마이그레이션 기록이 삭제되었습니다.');

        // 3단계: 마이그레이션 재실행
        $this->info('🔄 Admins 테이블 재생성 중...');
        Artisan::call('migrate', [
            '--path' => 'database/migrations/2025_08_20_081521_create_admins_table.php',
            '--force' => true
        ]);
        $this->info('✓ Admins 테이블이 재생성되었습니다!');

        $this->newLine();
        $this->info('🎉 모든 작업이 완료되었습니다!');
        
        return 0;
    }
}