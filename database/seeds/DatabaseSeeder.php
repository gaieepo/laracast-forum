<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        DB::table('users')->truncate();
        DB::table('threads')->truncate();
        DB::table('replies')->truncate();
        DB::table('channels')->truncate();

        $this->call(UsersTableSeeder::class);
        $this->call(RepliesTableSeeder::class);

        Schema::enableForeignKeyConstraints();
    }
}
