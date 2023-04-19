<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

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
        $user = new User();
        $user->name = 'Administrator';
        $user->email = 'admin@site.com';
        $user->role = '1';
        $user->status = '1';
        $user->is_admin = '1';
        $user->password = Hash::make('pass12345');
        $user->save();

        $user = new User();
        $user->name = 'Custodian';
        $user->email = 'custodian@site.com';
        $user->role = '1';
        $user->status = '1';
        $user->is_admin = '0';
        $user->password = Hash::make('pass12345');
        $user->save();
    }
}
