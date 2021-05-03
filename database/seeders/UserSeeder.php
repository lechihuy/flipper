<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fullname' => 'Lê Chí Huy',
            'phone_number' => '0933160483',
            'email' => 'lechihuy1062001@gmail.com',
            'address' => '144/15 Bình Lợi, Bình Thành, tp. Hồ Chí Minh',
            'password' => bcrypt('flipper2021')
        ]);
    }
}
