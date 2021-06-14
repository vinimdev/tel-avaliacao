<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createDefaultUser();

        \App\Models\User::factory(10)->create();
    }

    private function createDefaultUser()
    {
        $vinicius = [
            'name' => 'Vinícius Meira',
            'email' => 'vinicius@admin.com.br',
            'email_verified_at' => now(),
            'password' => Hash::make('vini1234'),
            'remember_token' => Str::random(10)
        ];

        User::create($vinicius);
    }
}
