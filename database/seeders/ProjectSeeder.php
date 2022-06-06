<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'PROJECT 1',
            'PROJECT 2',
            'PROJECT 3'
        ];

        foreach ($data as $values) {
            Project::create([
                'name' => $values,
            ]);
        }
    }
}
