<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public $user = [
        [
            'id' => 1,
            'name' => '',
            'description' => '',
        ],
        [
            'id' => 2,
            'name' => '',
            'description' => '',
        ],
    ];

    private function getUser()
    {
        return $this->user;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getUser() as $user) {
            User::create($user);
        }
    }
}

