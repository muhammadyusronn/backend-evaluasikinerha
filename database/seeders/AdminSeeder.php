<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            'fullname' => 'Muhammad Yusron Hartoyo',
            'email' =>  'hartoyomuhammady@gmail.com',
            'username' => 'muhammadyusronn',
            'password'  =>  '123123123',
            'role'  =>  'admin',
            'is_active' =>  1
        ];
        User::create($data);
    }
}
