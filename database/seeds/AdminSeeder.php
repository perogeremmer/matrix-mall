<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'name' => 'Admin Matrix Mall',
                'email' => 'admin@test.com',
                'password' => bcrypt('secret'),
                'type' => 1,
            ],
        ]);
    }
}
