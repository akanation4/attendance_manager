<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            'date' => '2021-08-01',
            'member_id' => 1,
            'start_time' => '09:00:00',
            'end_time' => '18:00:00',
            'break_time' => 60,
            'overtime_hours' => 0,
            'note' => 'テスト',
        ]);
    }
}
