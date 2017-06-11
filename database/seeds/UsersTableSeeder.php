<?php

use App\Thread;
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Wang Jie',
            'email' => 'gaieepo@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::create([
            'name' => 'Wang Gai',
            'email' => 'wang.jie@u.nus.edu',
            'password' => bcrypt('password')
        ]);

        factory(Thread::class, 3)->create(['user_id' => $user->id]);
    }
}
