<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            [
                'name' => 'テスト太郎',
                'is_admin' => false,
                'password' => 'password',
            ],
            [
                'name' => '管理者花子',
                'is_admin' => true,
                'password' => 'password',
            ],
        ]);
    }
}
