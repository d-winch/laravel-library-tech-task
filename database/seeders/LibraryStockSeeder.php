<?php

namespace Database\Seeders;

use App\Models\LibraryStock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryStockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LibraryStock::factory()->count(10)->create();
    }
}
