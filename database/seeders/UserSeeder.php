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
        App/User::class([
            'name'=>'olayinka',
            'email'=>'olayinkancs@gmail.com',
            'password'=>'haywhy100',
            'utype'=>1,
        ]);
        App/User::class([
            'name'=>'ola',
            'email'=>'ola@gmail.com',
            'password'=>'haywhy100',
            'utype'=>2,
        ]);
        App/User::class([
            'name'=>'ade',
            'email'=>'ade@gmail.com',
            'password'=>'haywhy100',
            'utype'=>3,
        ]);
    }
}
