<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\postlistings;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(5)->create();

        postlistings::factory(6)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // postlistings::create([
        //     "title" => "opp - 1",
        //     "tags" => "laravel, html, javascript",
        //     "companyName" => "devtuts",
        //     "location" => "up, IND",
        //     "email" => "devtuts@yopmail.com",
        //     "description" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"
        // ]);
        // postlistings::create([
        //     "title" => "opp - 2",
        //     "tags" => "html, css, javascript",
        //     "companyName" => "devtuts",
        //     "location" => "New York, USA",
        //     "email" => "devtuts@yopmail.com",
        //     "description" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries"
        // ]);
    }
}
