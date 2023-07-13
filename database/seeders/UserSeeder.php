<?php

namespace Database\Seeders;

use App\Models\Contact;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        User::create([
            'name' => "test3",
            'email' => "email1@gmail.com",
            'password' => bcrypt('123')
        ]);

        Contact::create([
            'address'=>'banasree',
            'phone'=>'01774307611',
            'user_id'=>1
        ]);
        Role::create([
            'name'=>'admin',

        ]);
        Role::create([
            'name'=>'user',

        ]);
    }
}
