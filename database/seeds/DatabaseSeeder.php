<?php

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
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.com',
            'password' => bcrypt('asdf1234'),
        ]);

        DB::table('services')->insert([
            'title' => '1. Welcome to Authentication and CRUD demo.',
            'description' => 'You are seeing this list because currently you are not logged in to this site.',
            'price' => '$500',
            'user_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => '2. Services are pulled from database backend.',
            'description' => "For demo purpose this list will be populated with current user's services only.",
            'price' => '$500',
            'user_id' => 1,
        ]);
        DB::table('services')->insert([
            'title' => '3. Please login or register to customize this list',
            'description' => 'Navigate to Dashboard by using <a href="/dashboard">/dashboard</a> route. If not logged in you will be redirect to login page. For registering use any fictional but valid email address.',
            'price' => '$500',
            'user_id' => 1,
        ]);
    }
}
