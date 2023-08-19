<?php

namespace Database\Seeders;

use App\Models\MembershipStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MembershipStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MembershipStatus::factory()->count(10)->create();
    }
}
