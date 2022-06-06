<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Document;

class DocumentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'AUDITED FINANCIAL STATEMENT',
            'BIR',
            'BUILDING PERMIT',
            'BUSINESS PERMIT',
            'CONTRACT',
            'DHSUD',
            'GIS',
            'MANILA WATER',
            'OTHERS',
            'REAL PROPERTY TAX',
            'SEC',
            "SECRETARY'S CERTIFICATE",
            'TITLE'
        ];

        foreach ($data as $values) {
            Document::create([
                'name' => $values,
                'slug' => Str::slug($values)
            ]);
        }
    }
}
