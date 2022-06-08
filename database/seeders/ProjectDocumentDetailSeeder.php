<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProjectDocumentDetail;

class ProjectDocumentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProjectDocumentDetail::factory(10)->create();
    }
}
