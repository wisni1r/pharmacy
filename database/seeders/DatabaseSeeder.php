<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(20)->create();
         \App\Models\Location::factory(5)->create();
         \App\Models\Prescriber::factory(50)->create();
         \App\Models\Item::factory(150)->create();
         \App\Models\Customer::factory(200)->create();
         //\App\Models\Inventory::factory(50)->create();
         \App\Models\Prescription::factory(100)->create();         

    }
}
