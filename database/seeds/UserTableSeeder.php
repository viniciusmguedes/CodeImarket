<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\CodeIMarket\Models\User::class, 10)->create()->each(function ($u){
            $u->market()->save(factory(\CodeIMarket\Models\Market::class)->make());
        });

        factory(\CodeIMarket\Models\User::class)->create([
          'name' => 'User',
          'email' => 'user@user.com',
          'password' => bcrypt(123456),
          'remember_token' => str_random(10),
        ]);

        factory(\CodeIMarket\Models\User::class)->create([
          'name' => 'Admin',
          'email' => 'admin@user.com',
          'password' => bcrypt(123456),
          'role' => 'admin',
          'remember_token' => str_random(10),
        ]);
    }
}
