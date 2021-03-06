<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Model::unguard();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        $this->call([PostSeeder::class, AboutSeeder::class, GallerySeeder::class]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        Model::reguard();
    }
}
