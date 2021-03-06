<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->insert([
            'name'              =>  'Gökhan Gür',
            'email'             =>  'gokhan.php@gmail.com',
            'email_verified_at' =>  now(),
            'password'          =>  Hash::make('2248'),
            'remember_token'    =>  Str::random(10),
            'created_at'        =>  now(),
            'updated_at'        =>  now()
        ]);

        $user->insert([
            'name'              =>  'gurlab',
            'email'             =>  'a@a',
            'email_verified_at' =>  now(),
            'password'          =>  Hash::make('123'),
            'remember_token'    =>  Str::random(10),
            'created_at'        =>  now(),
            'updated_at'        =>  now()
        ]);

        $user->factory(15)->create();
    }
}
