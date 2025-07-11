<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::create([
            'title' => 'Belajar Laravel',
            'description' => 'Mempelajari dasar-dasar Laravel untuk pengembangan aplikasi web.',
            'is_done' => false,
        ]);

        Task::create([
            'title' => 'Membuat API',
            'description' => 'Membuat API sederhana menggunakan Laravel.',
            'is_done' => false,
        ]);
    }
}