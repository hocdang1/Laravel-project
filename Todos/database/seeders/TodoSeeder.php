<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TodoSeeder extends Seeder
{
    public $todo = [
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

    private function getTodo()
    {
        return $this->todo;
    }

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach ($this->getTdo() as $todo) {
            Todo::create($todo);
        }
    }
}

