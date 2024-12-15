<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VebinarSeeder extends Seeder
{
    public function run(): void
    {
        \App\Models\Vebinar::factory(10)->create();
    }
}
