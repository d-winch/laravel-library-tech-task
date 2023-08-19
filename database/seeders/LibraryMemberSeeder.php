<?php

namespace Database\Seeders;

use App\Models\LibraryMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LibraryMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LibraryMember::factory()->count(10)->create();
    }
}
