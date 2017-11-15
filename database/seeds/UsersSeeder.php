<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 'aac8281e-7751-4392-b18e-78b2996a2efe',
            'name' => 'Felipe Neuhauss',
            'email' => 'felipe.neuhuass@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'id' => '633c2f0e-aa29-47c2-b0f4-b37d24202c65',
            'name' => 'Wemerson Soares',
            'email' => 'wemerson.soares@gmail.com',
            'password' => bcrypt('secret'),
        ]);

        factory(\App\Models\User::class, 10)->create();
    }
}
