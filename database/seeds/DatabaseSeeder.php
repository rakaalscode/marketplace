<?php

use Illuminate\Database\Seeder;
use App\Level;
use App\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Level::create(['name'=>'superadmin']);
        Level::create(['name'=>'admin']);

        User::create([
            'name'=>'Super Admin',
            'email'=>'superadmin@gmail.com',
            'password'=>Hash::make('12345678'),
            'level_id'=>1,
        ]);

        User::create([
            'name'=>'Administrator',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('admin123'),
            'level_id'=>2,
        ]);



    }
}
