<?php

namespace Database\Seeders;

use App\Enums\UserStatus\UserStatus;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->createDefaultUsers();
    }

    protected function createDefaultUsers(): void
    {
        User::create(
            [
                'avatar' => null,
                'display_name' => 'Tic Toc Toe CPU',
                'username' => 'system',
                'email' => 'system@ttt.game',
                'password' => bcrypt('verysecretpassword'),
                'last_activity' => Carbon::now(),
                'status' => UserStatus::Idle,
            ]
        );

        // Me
        User::create(
            [
                'avatar' => null,
                'display_name' => 'Armin',
                'username' => 'armin',
                'email' => 'armin@gmail.com',
                'password' => bcrypt('password'),
                'last_activity' => Carbon::now(),
                'status' => UserStatus::Idle,
            ]
        );

        User::create(
            [
                'avatar' => null,
                'display_name' => 'Negar',
                'username' => 'negar',
                'email' => 'negar@gmail.com',
                'password' => bcrypt('password'),
                'last_activity' => Carbon::now(),
                'status' => UserStatus::Idle,
            ]
        );
    }
}
