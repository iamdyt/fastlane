<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'olanlokun',
            'email' => 'olanlokunlanre@gmail.com',
            'password' => bcrypt('1234567890')
        ]);
    }
}
