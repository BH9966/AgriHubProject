<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

    User::firstOrCreate([
        'email'=>'hamisi@gmail.com'
    ],[
        'name'=>'hamisi',
        'password' => Hash::make('12345')
    ]);
        $roles =[
            'buyer',
            'seller',
            'shop',
            'admin'
        ];

        foreach ($roles as $role) {
             Role::firstOrCreate([
                'name'=>$role
             ]);
        }
    }
}
